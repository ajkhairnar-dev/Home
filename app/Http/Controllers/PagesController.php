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
        $mintopplaces = $this->mintolplace();
        
        return view('welcome',compact('meta','super','offer','testimonials','mintopplaces'));
    }


    public function privacy() {
        $mintopplaces = $this->mintolplace();
        $data = Cache::rememberForever('privacy', function () {
            return DB::table('pages')->where('slug','privacy-policies')->first();
        });
        return view('page',compact('data','mintopplaces'));
    }
    
    
    public function terms() {
        $mintopplaces = $this->mintolplace();
        $data = Cache::rememberForever('terms', function () {
            return DB::table('pages')->where('slug','terms-conditions')->first();
        });
        return view('page',compact('data','mintopplaces'));
    }
    
    public function about_page() {
        $mintopplaces = $this->mintolplace();
        $meta = Cache::rememberForever('aboutmeta', function () {
            return DB::table('pages')->where('slug','about-us')->first();
        });
        return view('about',compact('meta','mintopplaces'));
    }
    
    public function faq() {
        $mintopplaces = $this->mintolplace();
        $meta = Cache::rememberForever('faqmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','faq')->first();
        });
        return view('faq',compact('meta','mintopplaces'));
    }
    
    public function contact_page() {
        $mintopplaces = $this->mintolplace();
        $meta = Cache::rememberForever('contactmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','contact-us')->first();
        });
        return view('contact',compact('meta','mintopplaces'));
    }
    
    public function blogs() {
        $mintopplaces = $this->mintolplace();
        $minutes = 1440; # 1 day
        $posts = Cache::remember('posts', $minutes, function () {
            return DB::table('posts')->get();
        });
        return view('allblogs',compact('posts','mintopplaces'));
    }
    
    public function topplaces($slug) {
        $mintopplaces = $this->mintolplace();
        $minutes = 1440; # 1 day
        $posts = DB::table('posts')->where('location',$slug)->get();
        return view('allblogs',compact('posts','mintopplaces'));
    }
    
    public function single_blog($slug) {
        $mintopplaces = $this->mintolplace();
        $data = DB::table('posts')->where('slug',$slug)->first();
        return view('blog',compact('data','mintopplaces'));
    }
    
    public function offers() {
        $mintopplaces = $this->mintolplace();
        $meta = Cache::rememberForever('offersmeta', function () {
            return DB::table('pages')->select('title','meta_description','meta_keywords')->where('slug','offers')->first();
        });
        
        $offers = Cache::rememberForever('offers', function () {
            return DB::table('offers')->get();
        });
        return view('offers',compact('offers','meta','mintopplaces'));
    }
    
    public function single_offer($slug) {
        $mintopplaces = $this->mintolplace();
        $data = DB::table('offers')->where('slug',$slug)->first();
        return view('single_offer',compact('data','mintopplaces'));
    }
    
    public function careers() {
        $mintopplaces = $this->mintolplace();
        $data = DB::table('jobpostings')->get();
        return view('careers',compact('data','mintopplaces'));
    }
    
    public function cabishpoints() {
        $mintopplaces = $this->mintolplace();
        $meta = Cache::rememberForever('cabishmeta', function () {
            return DB::table('pages')->where('slug','cabish-points')->first();
        });
        return view('cabish',compact('meta','mintopplaces'));
    }
    
}
