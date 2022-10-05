<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
use DB;

trait MyTraits {

    public function supercache() {
        return Cache::rememberForever('supercache', function () {
            return DB::table('supers')->where('status','1')->get();
        });
    }
    
    
    public function offercache() {
        return Cache::rememberForever('offerscache', function () {
            return DB::table('offers')->where('status','1')->get();
        });
    }
    
    
    public function testimonailscache() {
        return Cache::rememberForever('testimonailscache', function () {
            return DB::table('testimonials')->where('status','1')->get();
        });
    }
    
    
    public function mintolplace() {
        return Cache::rememberForever('mintopplace', function () {
            return DB::table('bloglocation')->where('featured','1')->limit(6)->get();
        });
    }
    
}

