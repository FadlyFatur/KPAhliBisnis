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

// Route('/invoice','checkoutController@invoiceMail');

//route ke keranjang/cart --fdly
Route::get('/Keranjang',[
  'uses' => 'detailProdukController@getCart',
  'as'=> 'detailProduk.keranjang'
]);


Route::get('/Tambahkeranjang/{id}',[
  'uses' => 'detailProdukController@getTambahKeranjang',
  'as'=> 'detailProduk.TambahKeranjang'
]);

Route::get('/Tambah/{id}',[
  'uses' => 'detailProdukController@getTambah',
  'as'=> 'detailProduk.plus'
]);

route::get('/reduce/{id}',[
  'uses'=>'detailProdukController@getReduceOne',
  'as'=>'detailproduk.reduceOne'
]);

route::get('/remove/{id}',[
  'uses'=>'detailProdukController@getRemoveItem',
  'as'=>'detailproduk.remove'
]);


// Percobaan Notifikasi untuk nanti dipakai proses pemesanan
Route::get('/sendNotif', function () {
    $users = User::where('email','coolblackman411@gmail.com')->first();
    $users->notify(new InvoicePaid());
    echo "Notif Success";
});


// Route untuk halaman detail dan kontak
Route::get('/contact', function () {
    return view('contact.index');
});

// pindah detail produk {{fdly}}
Route::get('/detailProduk',[
  'uses'=>'detailProdukController@index',
  'as'=>'detailProduk.index'
]);

//pindah ke Kategori
// Route::view('/kategori','kategori');

//pindah ke checkout
Route::get('/checkout',[
  'uses'=>'checkoutController@getCheckout',
  'as'=>'checkout',
  'middleware'=>'auth'
]);

Route::post('/checkout',[
  'uses'=>'checkoutController@postCheckout',
  'as'=>'checkout'
]);

Route::post("/checkout/getCity","checkoutController@selectedCity")->name("checkoutLoc");

// Proses Autentikasid dan Halaman Profile
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@update')->name('homeUpdate');


// route ke info pemesanan
Route::get('/home/infoPemesanan', 'PemesananController@getInfo')->name('infoPemesanan');

// Route::get('/upload/{id}', 'PemesananController@upload')->name('upload');
// Route::post('/upload/proses', 'PemesananController@proses_upload');

// Route::view('/file-upload', 'upload');
Route::post('/file-upload', 'PemesananController@store');
Route::get('/view-uploads', 'PemesananController@viewUploads')->name('lihatStruk');

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
    Mail::to("mesweb.design@gmail.com")->send( new OrderShipped($order));
    echo "Mail sent!,Check your inbox";
});

Route::get('adminLogin/{key}', function ($key) {
    $link = session("key");
    if($key == $link){
        return redirect("/adminLogin");
    }else{
        return redirect("/adminLogin");
    }
});

Route::get('/adminLogin',[
  'uses'=> 'adminLogin@index',
  'as'=>'adminDashboard.index'
]);

Route::get('adminUpdate/{id}','adminLogin@edit');

Route::post('update/{id}',[
  'uses'=>'adminLogin@update',
  'as'=>'adminUpdate'
]);
