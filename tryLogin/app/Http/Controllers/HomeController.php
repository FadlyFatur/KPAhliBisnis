<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            "data_user" => Auth::user()
        ];
        // dd($data["data_user"]["imageName"]);
        return view('home',['data'=>$data]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::where('id',Auth::id())->first();
        $data = [
            "data_user" => Auth::user(),
            "berhasil" => "Selamat! Data Anda Berhasil Dirubah!",
            "berhasilPassword" =>"Selamat! Password Anda telah dirubah!"
        ];
        // Eksekusi etika user mengubah email atau nama
        if($request->has('form1')){
            if($request["nama"] !== $data["data_user"]["name"] ){
                $user->name = $request["nama"];
                $user->save();
                return redirect("home")->with('status',$data["berhasil"]);
            }else if($request["email"] !== $data["data_user"]["email"] ){
                $user->email = $request["email"];
                $user->save();
                return redirect("home")->with('status',$data["berhasil"]);
            } 
            else{
                return redirect("home")->withErrors("Tidak ada data yang berbeda dari yang sebelumnya");
            }
        }
        // Eksekusi ketika user mengubah password
        if($request->has("form2")){
            if (Hash::check($request["pwLama"], $user->password)) {
                if ($request["pwBaru"] === $request["konfirmasiPW"]) {
                    $pwBaru = Hash::make($request["pwBaru"]);
                    $user->password = $pwBaru;
                    $user->save();
                    return redirect("home")->with('status',$data["berhasilPassword"]);
                }else{
                    return redirect("home")->withErrors(["Password Baru Tidak Sama"]);
                } 
            }else{
                return redirect("home")->withErrors(["Mohon Masukan Password Anda Dengan Benar"]);
            }
        }
        // Eksekusi ketika ganti foto
        if($request->has("form3")){
            $validation = $request->validate([
                'foto' => "required|file|image|mimes:jpeg,png,webp|max:2048"
            ]);
            $file = $request->file("foto");
            if($file->isValid()){
                // $path = $hasilImage->store("storage");
                $extension = $file->extension();
                $filename = Str::random(40);
                if(Storage::disk('local')->exists($data["data_user"]["imageName"])){
                    if($data["data_user"]["imageName"] == "default.png"){
                        // dd($hasilImage);
                        $hasilImage = Image::make($file)->resize(300,300)->save(storage_path("app/public/image/". $filename .".".$extension));
                        $user->imageName = $filename . "." . $extension;
                        $user->save();
                    }else{
                        Storage::delete($data["data_user"]["imageName"]);
                        $hasilImage = Image::make($file)->resize(300,300)->save(storage_path("app/public/image/").$filename .".".$extension);
                        $user->imageName = $filename . "." . $extension;
                        $user->save();
                    }
                }
                $data = [
                    "data_user" => Auth::user()
                ];
                
                
                return view("home",["data"=>$data]);
            }
        }
    }

}
