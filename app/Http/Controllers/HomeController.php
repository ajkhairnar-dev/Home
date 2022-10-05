<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use DateTime;
use App\Http\Traits\MyTraits;
use Session;

class HomeController extends Controller
{
    use MyTraits;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $mintopplaces = $this->mintolplace();
        $id = session()->get('isLogin')['id'];
        //$data= DB::select("select * from customer where id = '".$id."'");
        $data = DB::table('customer')->where('id',$id)->first();
        $points = DB::select("select * from cabishpoints c where c.customer_id ='".$id."'");
        
        $bookings = DB::select("select b.bookingstatus, bd.rdate,b.booking_id , tt.code as triptype,bd.`date`,b.created_at, b.pick_location, b.drop_location, t.`type` as paytype, t.final_amt , t.balance as remaing_amt from bookings b 
        inner join booking_details bd on b.booking_id = bd.booking_id 
        right join transcations t  on b.booking_id = t.booking_id 
        right join trip_types tt on b.trip_types = tt.id 
        where b.customer_id ='".$id."'");

        //return view('users.my-profile',['data'=>$data[0],'points'=>$cabishpoint, 'bookings'=>$booking,'mintopplaces'=>$mintopplaces]);
        return view('users.my-profile',compact('data','points','bookings','mintopplaces'));
    }

    public function updateprofile(Request $request){

        $id = session()->get('isLogin')['id'];
        $profile['name'] = $request['name'];
        $profile['email'] = $request['email'];
        $profile['mobile'] = $request['mobile'];

        DB::table('customer')
            ->where('id', $id)
            ->update($profile);


        $data = session()->get('isLogin');
        $data['name'] = $request['name'];
        session()->put('isLogin',$data);
        return redirect('my-profile');
    }

    public function cancelledbooking(Request $request){
        $dt = new DateTime();
        $canc['remark'] = $request['remark'];
        $canc['bookingstatus'] = 4;
        $canc['cancelleddate']= $dt->format('Y-m-d H:i:s');

        DB::table('bookings')
            ->where('booking_id', $request['booking_id'])
            ->update($canc);
        return redirect('my-profile');
    }
    
    public function trips() {
        $mintopplaces = $this->mintolplace();
        
        $id = session()->get('isLogin')['id'];
        $data = DB::table('customer')->where('id',$id)->first();
        $bookings = DB::select("select  b.bookingstatus, bd.rdate, b.booking_id , tt.code as triptype,bd.`date`,b.created_at, b.pick_location, b.drop_location, t.`type` as paytype, t.final_amt , t.balance as remaing_amt from bookings b 
        inner join booking_details bd on b.booking_id = bd.booking_id 
        right join transcations t  on b.booking_id = t.booking_id 
        right join trip_types tt on b.trip_types = tt.id 
        where b.customer_id ='".$id."'");
        return view('users.my-trips',compact('bookings','data','mintopplaces'));
    }
    
    public function earnings() {
        
        $mintopplaces = $this->mintolplace();
        $id = session()->get('isLogin')['id'];
        $data = DB::table('customer')->where('id',$id)->first();
        $points = DB::table('cabishpoints')->where('customer_id',$id)->get();
        return view('users.earnings',compact('points','data','mintopplaces'));
    }
}
