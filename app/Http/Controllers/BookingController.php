<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Bookings;
class BookingController extends Controller
{
    public function index(Request $request) {
       // $name = $request->query('name');
        //echo $name;
        return view('cablist');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('home');


    }
    public function customerregistration(Request $request){
        $reqBody = $request->all();
        //  = DB::table('customer')->where('mobile',$request->query('mobile'))->first();

        $data= DB::select("select id,email,mobile,name,cabishpoints from customer where mobile = '".$reqBody['mobile']."'");

        if(count($data) > 0){
            
            $isLogindata = array(
                'id' => $data[0]->id,
                'name' => isset($data[0]->name) ? $data[0]->name  : 'Guest',
                'mobile'=> $data[0]->mobile,
                'email' => $data[0]->email,
                'cabishpoint' => $data[0]->cabishpoints
            );
            session()->put('isLogin',$isLogindata);
            // session()->forget('isLogin');
            // $request->session()->flush();
            return response()->json([
                'status' => true,
                'message' => "Login Successfully !"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => "Something wends wrong !"
            ], 400);
        }
    }

    
        //cabish point
    public function cabishpoint(Request $request){

        // 10 points == 1rs
        $total_cbspoint = 50;
        $pointtorupees = round($total_cbspoint/10);
        $data = $request->all();
        $data['payment']['pts'] = $total_cbspoint; 
        $data['payment']['ptsrupees'] = $pointtorupees;      
        return view('cabishpoint', ['data' => $data]);
    }
    
    
    
    //payment status
    public function paymentstatus(){
        // session()->put('isLogin',$isLogindata);
       
        dd(session()->get('isLogin'));
        dd(session()->get('bookingdetail'));
        $booking['booking_id'] = $this->generateUniqueCode();
        $booking['booking_id'] = $this->generateUniqueCode();
        return view('paymentstatus');
    }

    public function generateUniqueCode()
    {
        do {
            $code = "GO".random_int(100000, 999999);
        } while (Bookings::where("booking_id", "=", $code)->first());
        return $code;
    }



    public function invoicedownload(Request $request){
        // $data = [];
        // // echo url('/images/invoice/bg-img.jpg');
        // view()->share('employee',$data);
        // $pdf =  PDF::setOptions(['isHtml5ParserEnabled' => true,'isPhpEnabled' => true])->loadView('invoice', $data);

        // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');

        return view('invoice');
    }

    public function payment(Request $request){
        print_r($request->all());
        return view('cabishpoint', ['data' => $data]);
    }


    public function search(Request $request) {
        //dd($request);
        $trip = $request->query('triptype');
        $tripmeta['pickup'] = $request->query('pickup');
        $tripmeta['drop'] = $request->query('drop');
        $tripmeta['triptype'] = $request->query('triptype');
        $tripmeta['ddate'] = $request->query('ddate');
        $tripmeta['dtime'] = $request->query('dtime');

        switch ($trip) {
        case "ONEWAY":
            $data = oneway($request);
            if($data==false) {
            return view('noservice');
            }
            return view('cablist',['data' => $data,'tripmeta'=>$tripmeta]);
            break;
        case "ROUNDTRIP":
            $data = roundtrip($request);
            return view('roundlist',['data' => $data,'tripmeta'=>$tripmeta]);
            break;
        case "LOCALTRIP":
            $data = localtrip($request);
            if($data==false) {
            return view('noservice');
            }
            return view('locallist',['data' => $data,'tripmeta'=>$tripmeta]);
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        
        //dd($data);

        
    }


    public function booking(Request $request) {
        $distance = getDistance($request->pickup, $request->drop, "K");
        $vdata = DB::table('vehicle_types')->where('type',$request->vehicletype)->first();
        $triptype = DB::table('trip_types')->where('code',$request->triptype)->first();
        return view('booking',['data' => $request, 'distance'=>$distance,'vdata'=>$vdata, 'triptype'=>$triptype]);
    }


}


function checkcitystatus($city) {
    $error_staus = false;
    $city = substr($city, 0, strpos($city, ","));
    $result = DB::table('cities')->select('status')->where('city_name',$city)->first();
    if($result->status==1) {
        return false;
    } else return true;
}

function oneway($request) {

    $trip = $request->query('triptype');
    $pickup = $request->query('pickup');
    $drop = $request->query('drop');
            

    $lpack = DB::table('local_out_packages')
    ->select('id')
    ->where('pickup',$pickup)
    ->where('drop',$drop)
    ->first();


    if(!empty($lpack)) {
        $resultdata = DB::select("SELECT lop.id , lop.pickup ,lop.`drop`, lop.kms,lor.rates , lor.after_rates,lor.discount ,lop.toll_tax,
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars
                FROM local_out_packages as lop
                INNER JOIN local_out_pack_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                where lop.id = '".$lpack->id."' ORDER BY vt.id ASC");
                
        //$resultdata = getDistance($pickup,$drop);
        return $resultdata;
    }

    else {
       return false;
    }

    
}



function localtrip($request) {
    $pickup = $request->query('pickup');
    $pack_type = $request->query('pack_type');
            

    $lpack = DB::table('local_packages')
    ->select('id')
    ->where('pickup',$pickup)
    ->first();


    if(!empty($lpack)) {
        $resultdata = DB::select("SELECT lop.id, lop.pickup, lor.pack_type, lor.rates, lor.after_rates, lor.after_hours ,lor.discount,
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars
                FROM local_packages as lop
                INNER JOIN local_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                where lop.id = '".$lpack->id."' AND lor.pack_type = '".$pack_type."' ORDER BY vt.id ASC");
                
        //$resultdata = getDistance($pickup,$drop);
        return $resultdata;
    }

    else {
       return false;
    }
}


function roundtrip($request){
    
    $lpack = DB::table('round_packages')
    ->select('id')
    ->where('pickup',$request->query('pickup'))
    ->first();
    
    if(!empty($lpack)) {
    
    
    $arr = [];
    $pickupTime = $request->query('pickuptime'); 
    $returnTime = $request->query('returntime'); 
    $arr[0] =  $request->query('pickup');
    $arr[1] =  $request->query('drop');
    $extracity =$request->query('round'); 
    $totalKm=0;
    $totalRate = 0;
    
    $counter = 2;
    for($i=0; $i < count($extracity); $i++) {
        $arr[$counter] = $extracity[$i];
        $counter++;
    }
    
    $citywithdist=[];
   
    for($i=0; $i <=count($arr)-2; $i++){
        $totalKm = $totalKm+getDistance($arr[$i],$arr[$i+1]);
    }
    
    $arrcnt = count($arr)-1;
    $totalKm = $totalKm + getDistance($arr[$arrcnt],$arr[0]);
    
    
    $date1 = date_create($pickupTime);
    $date2 = date_create($returnTime);
    $diff = date_diff( $date1, $date2 );
    $totalDays = $diff -> d;
    
    $avarage = 300;
    $totalavg = $totalDays * $avarage;
    //distance 1000
    //avg distance  2 days X 300 = 600
    //km return  if(1000>600) return 1000 else 600
    
    $allowance = $totalDays*0;

    if($totalavg > $totalKm){
        $totalRate = $totalavg;
    } else {$totalRate = $totalKm;}
            
    $resultdata = DB::select("SELECT lop.id, lop.pickup, lor.rates, lor.after_rates,
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg' ,  vt.seat, vt.ac, vt.ratings, vt.stars
                FROM round_packages as lop
                INNER JOIN round_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                where lop.id = '".$lpack->id."' ORDER BY vt.id ASC");
    
    return [$resultdata, $totalRate, $allowance];

    }
}


function findDays($pickupTime, $returnTime){
  $diff=date_diff($pickupTime,$returnTime);
  return $diff->format("%a");
               
}

function getDistance($addressFrom, $addressTo){
    // Google API key
    $apiKey = 'AIzaSyDejTlLIDSMtBAR8FEbeJmr2CvBjwVDwpM';

    //https://maps.googleapis.com/maps/api/geocode/json?address=pathardi+phata+nashik&sensor=false&key=AIzaSyDejTlLIDSMtBAR8FEbeJmr2CvBjwVDwpM  for geocode
    //https://maps.googleapis.com/maps/api/distancematrix/json?origins=Nashik,Maharashtra,India&destinations=Mumbai,Maharashtra,India&key=AIzaSyDejTlLIDSMtBAR8FEbeJmr2CvBjwVDwpM

    $origin      = str_replace(' ', '', $addressFrom);
    $destination = str_replace(' ', '', $addressTo);

    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destination&key=AIzaSyDejTlLIDSMtBAR8FEbeJmr2CvBjwVDwpM";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response, true);
    return preg_replace("/[^0-9.]/", "",$response['rows'][0]['elements'][0]['distance']['text']);
}




