<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        Auth::user()->name;
        return view('users.my-profile');
    }
    
    
    public function trips() {
        return view('users.my-trips');
    }
    
    public function earnings() {
        return view('users.earnings');
    }
}
