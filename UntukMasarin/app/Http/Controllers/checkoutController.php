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
    public function getLoc(){
        // Get List of Cities data from Raja Ongkir
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: 37460c5743d1450a67372fe599cb23e5"
        ),
        ));

        $response = curl_exec($curl);
        // $response = json_decode($response,true);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        return "cURL Error #:" . $err;
        } else {
        return $response;
        }
    }

    public function getCheckout()
    {
      if (!Session::has('cart')){
        return view('detailProduk.keranjang');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $qty = $cart->totalQty;
      $total = $cart->totalHarga;

      $list = json_decode($this->getLoc(),true)["rajaongkir"]["results"];
      $list_provinsi = array_column($list,"province","province_id");
      $id = array_column($list,"province_id","city_id");
      $list_kota = array_column($list,"province","city_name");

      return view('checkout.index',['total'=>$total,'qty'=>$qty,'produks'=>$cart->items,
                                    "provinsi"=>$list_provinsi,"id_kota"=>$id]);
    }

    //record data checkout
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
      $order->kecamatan = $request->input('kec');
      $order->Kode_pos = $request->input('posKode');

      //create unique id
      // $uniqid = Str::random(5);
      // $order->order_id = $uniqid;

      Auth::user()->orders()->save($order);
      Session::forget('cart');
      return redirect()->route('infoPemesanan')->with('success','Berhasil Melakukan Pemesanan Produk');
    }

    public function selectedCity(Request $request)
    {
        // Passing variabel with AJAX with POST method
        $nama_prov = $request->prov;
        $kota_selected = json_decode($this->getLoc(),true)["rajaongkir"]["results"];
        $list_kota = array_column($kota_selected,"province","city_name");
        $list_related_prov = array_keys($list_kota, $nama_prov);

        return response()->json(['success2'=> $list_related_prov]);
    }

    public function invoiceMail()
    {
      return view('invoice_mail');
    }
}
