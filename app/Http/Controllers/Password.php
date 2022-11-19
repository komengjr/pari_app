<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\resetpass;
use Illuminate\Support\Facades\Hash;
use DB;
class Password extends Controller
{
    public function resetpassword(Request $request)
    {


        $cekemail= DB::table('users')
        ->select('users.*')
        ->where('email',$request->input('email'))
        ->get();

        if ($cekemail->isempty()) {

            return redirect()->back()->with(['alert-gagal' => 'Email Anda Tidak Terdaftar']);

        } else {

            $ceknir= DB::table('users')
            ->select('users.*')
            ->where('email',$request->input('email'))
            ->where('nir',$request->input('nir'))
            ->get();

            if ($ceknir->isempty()) {
                return redirect()->back()->with(['alert-gagal' => 'NIR yang anda masukan tidak sesuai dengan email terdaftar']);
            } else {



                Mail::to($request->input('email'))->send(new resetpass());
                return redirect()->back()->with(['alert-success' => 'Cek pesan email Anda']);
            }

        }

    }

    public function newpassword(Request $request)
    {

        if ($request->input('password') == $request->input('konfirmasi_password')) {
            DB::table('users')
            ->where('id',$request->input('id'))
            ->update([
                        'remember_token' => "",
                        'password' => Hash::make($request->input('password')),

                    ]);
            // return view('auth.login')->with(['alert-success' => 'berhasil ganti password xxxxxxxxx']);
            return redirect('login')->with(['alert-success' => 'berhasil ganti password '.$request->input('password')]);
        } else {
            return redirect()->back()->with(['alert-gagal' => 'Password anda tidak cocok']);
        }


    }
    public function reset($id,$ids)
    {
        $cek_token= DB::table('users')
        ->select('users.*')
        ->where('id',$id)
        ->where('remember_token',$ids)
        ->get();
        // dd($cek_token);
        if ($cek_token->isempty()) {

        } else {
            return view('layouts.buat_password',['id'=>$id]);
        }


    }
}
