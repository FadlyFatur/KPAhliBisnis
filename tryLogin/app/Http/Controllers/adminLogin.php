<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use Illuminate\Support\Facades\Storage;

class adminLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=0)
    {
        // mengambil data dari table admin
        $order = Order::all();
        $order->transform(function($order, $key){
          $order->cart = unserialize($order->cart);
          return $order;
        });
        // mengirim data admin ke view admin
        return view('adminDashboard.index', ['orders' => $order]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // memanggil view create
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

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
    public function update(Request $request,$id)
    {
        // $admin_edit = $request->input('status');
        switch ($request->input('action')) {
            case 'Konfirmasi':
                $admin_edit = Order::find($id);
                $admin_edit->status = true;
                $admin_edit->save();
                return redirect()->route('adminDashboard.index');

            case 'cek':
                $admin_edit = Admin::where('id', $id)->firstOrFail();
                $path = storage_path('public/' . $admin_edit->filename) ;
                return response()->download($path, $admin_edit
                         ->original_filename, ['Content-Type' => $admin_edit->mime]);
        }
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
}
