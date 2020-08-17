<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Struk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;

class PemesananController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("infoPemesanan");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getInfo()
    {
      $orders = Auth::user()->orders;
      $orders->transform(function($order, $key){
        $order->cart = unserialize($order->cart);
        return $order;
      });
      $order=Order::all()->count();
      if ($order <= 0) {
        return redirect()->back();
      }else{
        return view('infoPemesanan',['orders'=>$orders]);
      }
    }

    public function store(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'string|max:40',
        'image' => 'mimes:jpeg,png|max:1014',
      ]);

      // menyimpan data file yang diupload ke variabel $file
      $file = $request->file('image');

      $nama_file = time()."_".$file->getClientOriginalName();

                  // isi dengan nama folder tempat kemana file diupload
      $tujuan_upload = 'data_file';
      $file->move($tujuan_upload,$nama_file);

      $upload = Order::find($id);
      $upload->filename = $nama_file;
      $upload->save();

      return redirect()->back();
    }
}
