<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Session;
use App\Cart;

class detailProdukController extends Controller
{
    public function index(){
      $produks = Produk::all();
      return view('detailProduk.index',['produk'=>$produks]);
    }

    public function getTambahKeranjang(Request $request, $id)
    {
      $product = Produk::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart'):null;
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);

      $request->session()->put('cart',$cart);
      // dd($request->session()->get('cart'));
      return redirect()->route('detailProduk.index');
    }

    public function getCart()
    {
      if (!Session::has('cart')){
        return view('detailProduk.keranjang',['produk'=>null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalHarga;
      // $total = number_format($total,0,',','.');
      return view('detailProduk.keranjang',['produk'=>$cart->items, 'totalHarga'=>$total]);
    }

    public function getTambah(Request $request, $id)
    {
      $product = Produk::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart'):null;
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);

      $request->session()->put('cart',$cart);
      // dd($request->session()->get('cart'));
      return redirect()->route('detailProduk.keranjang');
    }

    public function getReduceOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null; //metode if else untuk cek apakah ada cart didalam session
      $cart = new Cart($oldCart);
      $cart->reduceOne($id);

      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }
      return redirect()->route('detailProduk.keranjang');
    }

    public function getRemoveItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null; //metode if else untuk cek apakah ada cart didalam session
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }

      return redirect()->route('detailProduk.keranjang');
    }


}
