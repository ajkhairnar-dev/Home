<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use DB;
use App\Http\Traits\MyTraits;


class PagesController extends Controller
{
    use MyTraits;
    
    public function index()
    {
        $meta = Cache::rememberForever('homemeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','home')->first();
        });
        $data = DB::table('site_settings')->get();
        
        $super = $this->supercache();
        $offer = $this->offercache();
        $testimonials = $this->testimonailscache();
        
        return view('welcome',compact('meta','super','offer','testimonials'));
    }


    public function privacy() {
        
        $data = Cache::rememberForever('privacy', function () {
            return DB::table('pages')->where('slug','privacy-policies')->first();
        });
        return view('page',['data'=>$data]);
    }
    
    
    public function terms() {
        $data = Cache::rememberForever('terms', function () {
            return DB::table('pages')->where('slug','terms-conditions')->first();
        });
        return view('page',['data'=>$data]);
    }
    
    public function about_page() {
        $meta = Cache::rememberForever('aboutmeta', function () {
            return DB::table('pages')->where('slug','about-us')->first();
        });
        return view('about',['meta'=>$meta]);
    }
    
    public function faq() {
        $meta = Cache::rememberForever('faqmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','faq')->first();
        });
        return view('faq',['meta'=>$meta]);
    }
    
    public function contact_page() {
        $meta = Cache::rememberForever('contactmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','contact-us')->first();
        });
        return view('contact',['meta'=>$meta]);
    }
    
    public function blogs() {
        $minutes = 1440; # 1 day
        $posts = Cache::remember('posts', $minutes, function () {
            return DB::table('posts')->get();
        });
        return view('allblogs');
    }
    
    public function single_blog($slug) {
        $data = DB::table('posts')->where('slug',$slug)->first();
        return view('blog',['data'=>$data]);
    }
    
    public function offers() {
        $meta = Cache::rememberForever('offersmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','offers')->first();
        });
        
        $offers = Cache::rememberForever('offers', function () {
            return DB::table('offers')->get();
        });
        return view('offers',compact('offers','meta'));
    }
    
    public function single_offer($slug) {
        $data = DB::table('offers')->where('slug',$slug)->first();
        return view('single_offer',compact('data'));
    }
    
    public function careers() {
        $data = DB::table('jobpostings')->get();
        return view('careers',compact('data'));
    }
    
    public function cabishpoints() {
        $meta = Cache::rememberForever('cabishmeta', function () {
            return DB::table('pages')->where('slug','cabish-points')->first();
        });
        return view('cabish',['meta'=>$meta]);
    }
    
}
