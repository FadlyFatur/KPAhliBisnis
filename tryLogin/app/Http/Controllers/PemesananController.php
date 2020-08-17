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
      // $user = Order::all();
      return view('infoPemesanan',['orders'=>$orders]);
    }

    // public function upload(Request $request, $id){
    //   $user = Order::where('id',$id)->first();
    //   $this->validate($request, [
    //     'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
    //   ]);
    //
    //   // menyimpan data file yang diupload ke variabel $file
    //   $file = $request->file('file');
    //   if($file->isValid()){
    //     $extension = $file->getClientOriginalExtension();
    //     $nama_file =$file->getClientOriginalName();
    //     $hasilImage = Image::make($file)->save(storage_path("app/public/image/". $filename .".".$extension));
    //     // Storage::disk('public')->put($file->getFilename().'.'.$nama_file, File::get($file));
    //     $image->filename = $nama_file;
    //     $image->save();
    //   }
    //
    //
    //   // $image = new Order();
    //
    //   return redirect()->back()->with('sukses');
    // }

    public function viewUploads()
    {
      $images = Struk::all();
      return view('konfirmasi')->with('images', $images);
    }

    public function store(Request $request)
    {
      if ($request->hasFile('image')) {
              //  Let's do everything here
              if ($request->file('image')->isValid()) {
                  //
                  $validated = $request->validate([
                      'name' => 'string|max:40',
                      'image' => 'mimes:jpeg,png|max:1014',
                  ]);
                  $extension = $request->image->extension();
                  $request->image->storeAs('/public', $validated['name'].".".$extension);
                  $url = Storage::url($validated['name'].".".$extension);
                  $file = Struk::create([
                     'name' => $validated['name'],
                      'url' => $url,
                  ]);
                  ob_end_clean();
                  Session::flash('success', "Success!");
                  $images = Struk::all();
                  return view('konfirmasi')->with('images', $images);
              }
          }
          abort(500, 'Could not upload image :(');
    }
}
