<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Route;
use App\Notifications\InvoicePaid;
use App\User;

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

// Percobaan pengiriman email
Route::get('/sendMail', function () {
    $order = [
        "Title" => "Confirmation Links",
        "Success" => "Success"
    ];
    Mail::to("coolblackman411@gmail.com")->send( new OrderShipped($order));
    echo "Mail sent!";
});

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

// Proses Autentikasi
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@update')->name('homeUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Proses Session
Route::get('/session/get', 'UserController@getSessionData');

Route::get('/session/set', 'UserController@storeSessionData');

Route::get('/session/remove', 'UserController@deleteSessionData');
