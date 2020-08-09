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
      return view('detailProduk.keranjang',['produk'=>$cart->items, 'totalHarga'=>$cart->totalHarga]);
    }

    // public function getData(jenis $jenis)
    // {
    //   $jenis = Produk::select('imagePath')->where('jenis', $jenis)->get();
    //   return view('detailProduk.index',['jenis'->$jenis]);
    // }
}
