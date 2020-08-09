<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\Order;
use Session;
use App\Cart;
use Illuminate\Support\Str;
use Auth;

class checkoutController extends Controller
{
    public function getCheckout()
    {
      if (!Session::has('cart')){
        return view('detailProduk.keranjang');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $qty = $cart->totalQty;
      $total = $cart->totalHarga;
      return view('checkout.index',['total'=>$total,'qty'=>$qty,'produks'=>$cart->items]);
    }

    public function postCheckout(Request $request)
    {
      if (!Session::has('cart')){
        return view('detailProduk.keranjang');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $order = new Order();

      $order->cart = serialize($cart);
      $order->name_depan = $request->input('name-depan');
      $order->name_belakang = $request->input('name-belakang');
      $order->email = $request->input('email');
      $order->telphone= "+62" . $request->input('telephone');
      $order->address = $request->input('alamat');
      $order->nama_produk = $request->input('produk');
      $order->konsep = $request->input('konsep');
      $order->pengunaan_foto = $request->input('uses');
      $order->Provinsi = $request->input('prov');
      $order->Kabupaten = $request->input('kab');
      $order->Kecamatan = $request->input('kec');
      //create unique id
      $uniqid = Str::random(5);
      $order->payment_id = $uniqid;

      Auth::user()->orders()->save($order);
      Session::forget('cart');
      return redirect()->route('detailProduk.index')->with('success','Berhasil Melakukan Pemesanan Produk');
    }
}
