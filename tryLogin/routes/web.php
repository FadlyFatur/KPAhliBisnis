<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Route;
use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Support\Str;
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


// Percobaan Notifikasi untuk nanti dipakai proses pemesanan
Route::get('/sendNotif', function () {
    $users = User::where('email','coolblackman411@gmail.com')->first();
    $users->notify(new InvoicePaid());
    echo "Notif Success";
});

// Coba Setelah User ter-autentikasi, nantinya hal ini diganti
// sama homepage yang dibikin zul
Route::get('/', function () {
    $user = "";
    if (Auth::check()){
        $user = Auth::user();
        $responses = "Welcome ".$user->name;
    }
    return view('welcome',compact("user"));
});

// Route untuk halaman detail dan kontak
Route::get('/contact', function () {
    return view('contact.index');
});

// pindah detail produk
Route::get('/detailProduk','detailProdukController@index');


//pindah ke Kategori
Route::view('/kategori','kategori');

//pindah ke checkout
Route::view('/checkout','checkout.Checkout');

// Proses Autentikasid dan Halaman Profile
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@update')->name('homeUpdate');
Route::get('/home/infoPemesanan', 'PemesananController@index')->name('infoPemesanan');
// Route::get('/home/infoPemesanan', 'PemesananController@index')->name('infoPemesanan');

// Route::view('/home/infoPemesanan','infoPemesanan');

// Proses Session
Route::get('/session/get', 'UserController@getSessionData');
Route::get('/session/set', 'UserController@storeSessionData');
Route::get('/session/remove', 'UserController@deleteSessionData');


// Mengirimkan Email untuk autentiasi admin Login
Route::get('/sendMail', function () {
    $random = Str::random(40);
    session(["key"=>$random]);
    $order = [
        "RandomString" => $random,
        "Title" => "Confirmation Links",
        "Success" => "Success"
    ];
    Mail::to("coolblackman411@gmail.com")->send( new OrderShipped($order));
    echo "Mail sent!,Check your inbox";
});

Route::get('adminLogin/{key}', function ($key) {
    $link = session("key");
    if($key == $link){
        return view("adminLogin.index");
    }else{
        return redirect("/");
    }
});
Route::post('/adminLogin/{key}',"adminLogin@store");
