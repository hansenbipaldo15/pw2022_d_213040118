<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use Hash;
use App\pengumuman;
use App\AuthLogin;
use App\AdminAuth;
class AuthController extends Controller
{
    // public function login_post(Request $r) {
    // 	$email = $r->email;
    // 	$password = Hash::make($r->password);

    // 	$makeAuth = Auth::make($email,$password);

    // 	if($makeAuth) {
    // 		return redirect('/');
    // 	}else{
    // 		session()->flash('danger','Gagal login anjay');
    // 		return redirect()->back();

    // 	}
    // }

    public function login(Request $request){
        try { 
            $kasir = Authlogin::where('email',$request->email)->first();
            $adminauth = AdminAuth::where('email',$request->email)->first();

            if($kasir){
                if(Hash::check($request->password,$kasir->password)){
                    Session::put('email',$request->email);
                    Session::put('id_kasir',$kasir->id_kasir);
                    Session::put('nama_kasir',$kasir->nama_kasir);  
                    Session::put('kode_kasir',$kasir->kode_kasir);
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->back()->with('gagalLogin','Password Salah!');
                }
            }else if($adminauth){
                if(Hash::check($request->password,$adminauth->password)){
                    Session::put('email',$request->email);
                    Session::put('level',$adminauth->level);
                    Session::put('id_kasir',$adminauth->id_admin);
                    Session::put('nama_kasir','ADMINISTRATOR'); 
                    Session::put('kode_kasir','ADMINISTRATOR');

                    return redirect()->route('dashboard');
                }else{
                    return redirect()->back()->with('gagalLogin','Password Salah!');
                }           
           
            }else{
                return redirect()->back()->with('gagalLogin','Email Salah!');
            }            

        } catch(\Illuminate\Database\QueryException $ex){ 
          return redirect()->back()->with('queryException','Koneksi ke DB bermasalah harap coba lagi.');
        }



    }

    public function logout(Request $request){
    	Session::flush();
    	return redirect()->route('formlogin');
    }
}
