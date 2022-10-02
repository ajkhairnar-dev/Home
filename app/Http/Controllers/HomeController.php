<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
    //     if (Auth::check()) {
    // // The user is logged in...
    //     }
        
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('users.my-profile',compact('user'));
    }
    
    
    public function trips() {
        return view('users.my-trips');
    }
    
    public function earnings() {
        return view('users.earnings');
    }
}
