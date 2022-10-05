<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $id = session()->get('isLogin')['id'];
        $data= DB::select("select * from customer where id = '".$id."'");
        $cabishpoint = DB::select("select * from cabishpoints c where c.customer_id ='".$id."'");
       
        return view('users.my-profile',['data'=>$data[0],'points'=>$cabishpoint]);
    }

    public function updateprofile(Request $request){
        $id = session()->get('isLogin')['id'];
        $profile['name'] = $request['name'];
        $profile['email'] = $request['email'];
        $profile['mobile'] = $request['mobile'];

        DB::table('customer')
            ->where('id', $id)
            ->update($profile);

            
// select * from bookings b 
// inner join booking_details bd on b.booking_id = bd.booking_id 
// where b.customer_id = 6
            
        return redirect('my-profile');
    }
    
    public function trips() {
      
        return view('users.my-trips');
    }
    
    public function earnings() {
        return view('users.earnings');
    }
}
