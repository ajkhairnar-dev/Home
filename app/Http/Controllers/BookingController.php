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

            $data['mobile'] = $reqBody['mobile'];
            DB::table('customer')->insert($data);
            $data= DB::select("select id,email,mobile,name,cabishpoints from customer where mobile = '".$reqBody['mobile']."'");
            $isLogindata = array(
                'id' => $data[0]->id,
                'name' => isset($data[0]->name) ? $data[0]->name  : 'Guest',
                'mobile'=> $data[0]->mobile,
                'email' => $data[0]->email,
                'cabishpoint' => $data[0]->cabishpoints
            );
            session()->put('isLogin',$isLogindata);
            return response()->json([
                'status' => true,
                'message' => "Login Successfully !"
            ], 200);
        }
    }

    
        //cabish point
    public function cabishpoint(Request $request){

        // 10 points == 1rs
        $total_cbspoint = 50;
        $pointtorupees = round($total_cbspoint/10);
        $data = $request->all();
        
        $data['cabishpoint']['custtotalpoints'] = session()->get('isLogin')['cabishpoint'];
        $data['cabishpoint']['redeempoint'] = ((int)$data['cabishpoint']['custtotalpoints'] >= (int)$data['sitesetting']['cabish_redem_limit']) ? (int)$data['sitesetting']['cabish_redem_limit'] : (int)$data['cabishpoint']['custtotalpoints'];
        $data['cabishpoint']['pointstorupees']  = $data['cabishpoint']['redeempoint'];

        $data['payment']['pts'] = $total_cbspoint; 
        $data['payment']['ptsrupees'] = $pointtorupees;      
        return view('cabishpoint', ['data' => $data]);
    }
    
    
    
    //payment status
    public function paymentstatus(){

        $customer = session()->get('isLogin');
        $bd= session()->get('bookingdetail');

        $point = 0;
        //------------- cabish point --------- 
        //debit cabish point
        if($bd['cabishpoint']['isptsapply'] == "YES"){
            $point = (int)$bd['cabishpoint']['custtotalpoints'] - (int)$bd['cabishpoint']['redeempoint'];
            
            $cabishupdate['customer_id'] = session()->get('isLogin')['mobile'];
            $cabishupdate['types'] = 0;
            $cabishupdate['points'] = (int)$bd['cabishpoint']['redeempoint'];
            DB::table('cabishpoints')->insert($cabishupdate);
        }
        //get new points 
        $percentage = (int)$bd['sitesetting']['cabishpoints'];
        $percentInDecimal = $percentage / 100;
        $getnewPoints = round(($percentInDecimal * (int)$bd['transaction']['TXNAMOUNT']));
        if($getnewPoints >= $bd['sitesetting']['cabish_limit']){
            $getnewPoints = (int)$bd['sitesetting']['cabish_limit'];
        }
        $point = $point +  $getnewPoints;

        // creadit cabish point 
        $cabishupdate['customer_id'] = session()->get('isLogin')['mobile'];
        $cabishupdate['types'] = 1;
        $cabishupdate['points'] = $getnewPoints;

        DB::table('cabishpoints')->insert($cabishupdate);

        //update customer table for cabish point
        DB::table('customer')
            ->where('mobile', $customer['mobile'])
            ->update(['cabishpoints' =>  $point]);

        //--------------------------------------------------------------
        $tripmeta = session()->get('searchdata');

        $booking['booking_id'] = $this->generateUniqueCode();
        $booking['customer_id'] = $customer['id'];
        $booking['trip_types'] = (int)$bd['triptype']['id'];
        $booking['vehicle_types'] = $bd['vehicles']['id'];
        $booking['pick_location'] = $tripmeta['pickup'];
        $booking['drop_location'] = $tripmeta['drop'];
        $booking['airport'] = $tripmeta['airport'];

        
        $bd['booking_id'] = $booking['booking_id'];
        //booking details 
        $bookingdetails['booking_id'] = $booking['booking_id'];
        $bookingdetails['full_name']  = $bd['userdetails']['fullName'];
        $bookingdetails['gender']  = $bd['userdetails']['gender'];
        $bookingdetails['email']  = $bd['userdetails']['email'];
        $bookingdetails['contact']  = $bd['userdetails']['contact'];
        $bookingdetails['pick_address']  = $bd['userdetails']['pickup'];
        $bookingdetails['drop_address']  = $bd['userdetails']['drop'];
        $bookingdetails['request']  = $bd['userdetails']['specialrequest'];
        $bookingdetails['distance'] = $bd['distance'];
        $bookingdetails['date'] = $tripmeta['ddate'];
        $bookingdetails['time'] = $tripmeta['dtime'];
        $bookingdetails['rdate'] = $tripmeta['rdate'];
        $bookingdetails['hrs'] = $bd['hrs'];


        //transaction
        if($bd['payment']['paytype'] == "partialpayment"){
            $paytype = 0;
        }else{
            $paytype = 1;
        }
        $transaction['booking_id'] = $booking['booking_id'];
        $transaction['type'] = $paytype;
        $transaction['final_amt'] = (int)$bd['payment']['amount'];
        $transaction['balance'] = (int)$bd['payment']['remaining'];
        $transaction['mid'] = $bd['transaction']['MID'];
        $transaction['txnid'] = $bd['transaction']['TXNID'];
        $transaction['txnamount'] = $bd['transaction']['TXNAMOUNT'];
        $transaction['paymentmode'] = $bd['transaction']['PAYMENTMODE'];
        $transaction['currency'] = $bd['transaction']['CURRENCY'];
        $transaction['txndate'] = $bd['transaction']['TXNDATE'];
        $transaction['status'] = $bd['transaction']['STATUS'];
        $transaction['respcode'] = $bd['transaction']['RESPCODE'];
        $transaction['respmsg'] = $bd['transaction']['RESPMSG'];
        $transaction['gatewayname'] = $bd['transaction']['GATEWAYNAME'];
        $transaction['banktxnid'] = $bd['transaction']['BANKTXNID'];
        $transaction['bankname'] = $bd['transaction']['BANKNAME'];
        $transaction['checksumhash'] = $bd['transaction']['CHECKSUMHASH'];


        DB::table('bookings')->insert($booking);
        DB::table('booking_details')->insert($bookingdetails);
        DB::table('transcations')->insert($transaction);

        $customer = session()->get('isLogin');
        $customer['cabishpoint'] = $point;

        session()->put('isLogin',$customer);

        return view('paymentstatus',['data' => $bd]);
    }

    //generate unique id
    public function generateUniqueCode()
    {
        do {
            $code = "GO".random_int(100000, 999999);
        } while (Bookings::where("booking_id", "=", $code)->first());
        return $code;
    }



    public function invoicedownload(Request $request){
        $data = [];
        // // echo url('/images/invoice/bg-img.jpg');
        // view()->share('employee',$data);
        // $pdf =  PDF::setOptions(['isHtml5ParserEnabled' => true,'isPhpEnabled' => true])->loadView('invoice', $data);

        // // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');

        return view('invoice');
    }

    public function payment(Request $request){
        print_r($request->all());
        return view('cabishpoint', ['data' => $data]);
    }


    public function search(Request $request) {

        session()->put('searchfilter', $request->all());

        $trip = $request->query('triptype');
        $tripmeta['pickup'] = $request->query('pickup');
        $tripmeta['airport'] = "";
        if($request->query('triptype') == 'LOCALTRIP') 
        {
            $tripmeta['drop'] = $request->query('pickup');
         }else if($request->query('triptype') == 'AIRRETURN'){
            $tripmeta['drop'] = $request->query('pickup'); 
            $tripmeta['airport'] = $request->query('airport'); 
         }else {
            $tripmeta['drop'] = $request->query('drop'); 
        }
        $tripmeta['triptype'] = $request->query('triptype');
        $tripmeta['ddate'] = $request->query('ddate');
        $tripmeta['dtime'] = $request->query('dtime');
        $tripmeta['rdate'] = ($request->has('rdate')) ? $request->query('rdate') : "" ;

        if($request->query('triptype') == "LOCALTRIP"){

            $tripmeta['distance'] = (int)$request->query('pack_type') * 10;
            $tripmeta['hrs'] = (int)$request->query('pack_type') ;
        }
        
        session()->put('searchdata', $tripmeta);

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
            
            $extracity = $request->query('round');
            if(count($extracity) != 0){
                $tripmeta['drop'] = $extracity[count($extracity)-1];
            }
            return view('roundlist',['data' => $data,'tripmeta'=>$tripmeta]);
            break;
        case "LOCALTRIP":
                $data = localtrip($request);
                $tripmeta['drop'] = $request->query('pickup');
                if($data==false) {
                return view('noservice');
                }
                return view('locallist',['data' => $data,'tripmeta'=>$tripmeta]);
                break;
        case "AIRPICK":
                $data = airpick($request);
                if($data==false) {
                return view('noservice');
                }
                return view('cablist',['data' => $data,'tripmeta'=>$tripmeta]);
                break;
         case "AIRDROP":
                // dd($request->all());
                $data = airdrop($request);
                if($data==false) {
                return view('noservice');
                }
                return view('cablist',['data' => $data,'tripmeta'=>$tripmeta]);
                break;
        case "AIRRETURN":

                $data = airdrop($request);
                if($data==false) {
                return view('noservice');
                }
                return view('airreturnlist',['data' => $data,'tripmeta'=>$tripmeta]);
                break;
                default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    }


    public function booking(Request $request) {

        // dd($request->all());

        $abandonedbooking['customer_number'] = session()->get('isLogin')['mobile'];
        $abandonedbooking['trip_type'] = $request['triptype'];
        $abandonedbooking['pickup_location'] = $request['pickup'];
        $abandonedbooking['drop_location'] = $request['drop'];
        $abandonedbooking['date'] = $request['ddate'];

        DB::table('abandonedbooking')->insert($abandonedbooking);

        $hrs = 0;
        if($request['triptype'] == "ROUNDTRIP"){
            $distance = $request['distance'];
        }else if($request['triptype'] == "LOCALTRIP"){ 
            $distance = $request['distance'];
            $hrs = $request['hrs'];
        }else if($request['triptype'] == "AIRRETURN"){
            $distance = getDistance($request->pickup, $request->airport, "K");
            $distance = $distance * 2;
        }else{
            $distance = getDistance($request->pickup, $request->drop, "K");
        }

        $vdata = DB::table('vehicle_types')->where('type',$request->vehicletype)->first();
        $triptype = DB::table('trip_types')->where('code',$request->triptype)->first();
        $sitesetting = DB::table('site_settings')->first();
        return view('booking',['data' => $request, 'distance'=>$distance,'vdata'=>$vdata, 'triptype'=>$triptype, 'sitesetting'=>$sitesetting, 'hrs'=>$hrs]);
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
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars, tt.code , tt.inclusion , tt.exclusion , tt.additional_information 
                FROM local_out_packages as lop
                INNER JOIN local_out_pack_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                INNER JOIN trip_types as tt ON lop.trip_types = tt.code
                where lop.id = ".$lpack->id."
                ORDER BY vt.id ASC");
        //$resultdata = getDistance($pickup,$drop);
        return $resultdata;
    }

    else {
       return false;
    }

    
}



function airpick($request) {

    $trip = $request->query('triptype');
    $pickup = $request->query('pickup');
    $drop = $request->query('drop');

    $lpack = DB::table('airport_pick_packages')
    ->select('id')
    ->where('pickup',$pickup)
    ->where('drop',$drop)
    ->first();

    if(!empty($lpack)) {
        $resultdata = DB::select("SELECT lop.id , lop.pickup ,lop.`drop`, lop.kms,lor.rates , lor.after_rates,lor.discount ,lop.toll_tax,
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars,tt.code , tt.inclusion , tt.exclusion , tt.additional_information
                FROM airport_pick_packages as lop
                INNER JOIN airport_pick_package_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                INNER JOIN trip_types as tt ON lop.trip_types = tt.code
                where lop.id = '".$lpack->id."' ORDER BY vt.id ASC");
                
        //$resultdata = getDistance($pickup,$drop);
        return $resultdata;
    }
    else {
       return false;
    }
}

function airdrop($request) {
    // dd($request->all());
    $trip = $request->query('triptype');
    $pickup = $request->query('pickup');
    $drop = $request->query('drop');
    
    if($request->query('triptype') == "AIRRETURN"){
        $drop = $request['airport'];
    }

    $lpack = DB::table('airport_packages')
    ->select('id')
    ->where('pickup',$pickup)
    ->where('drop',$drop)
    ->first();

    
    if(!empty($lpack)) {
        $resultdata = DB::select("SELECT lop.id , lop.pickup ,lop.`drop`, lop.kms,lor.rates , lor.after_rates,lor.discount ,lop.toll_tax,
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars,tt.code , tt.inclusion , tt.exclusion , tt.additional_information
                FROM airport_packages as lop
                INNER JOIN airport_package_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                INNER JOIN trip_types as tt ON lop.trip_types = tt.code
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
                vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg', vt.seat, vt.ac, vt.ratings, vt.stars,tt.code , tt.inclusion , tt.exclusion , tt.additional_information
                FROM local_packages as lop
                INNER JOIN local_rates as lor ON lop.id = lor.pack_code
                INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                INNER JOIN trip_types as tt ON lop.trip_types = tt.code
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
       
        if(($request->query('round'))) 
        { 
            $extracity = $request->query('round');
        } else {
            $extracity = [];
        } 
     

        $arr = [];
        $pickupTime = $request->query('pickuptime'); 
        $returnTime = $request->query('returntime'); 
        $arr[0] =  $request->query('pickup');
        $arr[1] =  $request->query('drop');
        $totalKm=0;
        $totalRate = 0;
        // dd($extracity);
        
        //if addmultiple cities
        if(count($extracity) != 0){
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
        }else{
            
            $totalKm = getDistance($request->query('pickup'),$request->query('drop'));
            $totalKm = $totalKm * 2;
        }

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
                
        $resultdata = DB::select("SELECT lop.id, lop.pickup, lor.rates, lor.after_rates,lor.discount,
                    vt.`type` as 'vehicletype', vt.title as 'vehicletitle', vt.image as 'vehicleimg' ,  vt.seat, vt.ac, vt.ratings, vt.stars,
                    tt.code , tt.inclusion , tt.exclusion , tt.additional_information
                    FROM round_packages as lop
                    INNER JOIN round_rates as lor ON lop.id = lor.pack_code
                    INNER JOIN vehicle_types as vt ON lor.vehicle_id = vt.id
                    INNER JOIN trip_types as tt ON lop.trip_types = tt.code
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




