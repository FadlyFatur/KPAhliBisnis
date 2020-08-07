<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class detailProdukController extends Controller
{
    public function index(){
      $produks = Produk::all();
      return view('detailProduk.index',['produk'=>$produks]);
    }

    // public function getData(jenis $jenis)
    // {
    //   $jenis = Produk::select('imagePath')->where('jenis', $jenis)->get();
    //   return view('detailProduk.index',['jenis'->$jenis]);
    // }
}
