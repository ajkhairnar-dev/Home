<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('clear-cache', function() {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return redirect()->route('home')->with('suc', 'Cache Cleared!');
});


Route::get('api-cache-clear', function() {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
});


/*myaccountroute*/
Auth::routes();

Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'index'])->name('account');
Route::get('/my-trips', [App\Http\Controllers\HomeController::class, 'trips'])->name('mybookings');
Route::get('/earnings', [App\Http\Controllers\HomeController::class, 'earnings'])->name('earnings');


Route::get('cabishpoints')->name('cabishpoints');



Route::get('/', function () {
    return view('comingsoon');
});



Route::get('/home', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/bookride', function () { return view('bookride'); })->name('bookride');
Route::get('/faq', [App\Http\Controllers\PagesController::class, 'faq'])->name('faq');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'about_page'])->name('about');
Route::get('/cabishpoints', [App\Http\Controllers\PagesController::class, 'cabishpoints'])->name('cabishpoints');
Route::get('/careers', [App\Http\Controllers\PagesController::class, 'careers'])->name('careers');
Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contact_page'])->name('contact');
Route::get('/blogs', [App\Http\Controllers\PagesController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [App\Http\Controllers\PagesController::class, 'single_blog'])->name('single_blog');


Route::get('/offers', [App\Http\Controllers\PagesController::class, 'offers'])->name('offers');
Route::get('/offers/{slug}', [App\Http\Controllers\PagesController::class, 'single_offer'])->name('single_offer');
Route::post('/cabishpoint', [App\Http\Controllers\BookingController::class, 'cabishpoint']);
Route::post('/paymentstatus', [App\Http\Controllers\BookingController::class, 'paymentstatus']);
Route::get('/invoice', [App\Http\Controllers\BookingController::class, 'invoicedownload']);


/*forcalcualtin*/
Route::get('/search/{s?}', [App\Http\Controllers\BookingController::class, 'search'])->name('search');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'booking']);


Route::post('paytm-payment',[App\Http\Controllers\PaytmController::class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[App\Http\Controllers\PaytmController::class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[App\Http\Controllers\PaytmController::class, 'paytmPurchase'])->name('paytm.purchase');
/**any has to be last*/
Route::get('/privacy-polices', [App\Http\Controllers\PagesController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [App\Http\Controllers\PagesController::class, 'terms'])->name('terms');


