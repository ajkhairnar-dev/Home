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
        // dd($data[0]);
        return view('users.my-profile',['data'=>$data[0]]);
    }
    
    
    public function trips() {
      
        return view('users.my-trips');
    }
    
    public function earnings() {
        return view('users.earnings');
    }
}
