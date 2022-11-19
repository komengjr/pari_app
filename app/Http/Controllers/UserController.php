<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Middleware\Authenticate;
use Symfony\Component\HttpFoundation\Response;
use DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function datapeserta($id)
    {
        $data_peserta = DB::table('peserta_webinar')
        ->select('peserta_webinar.*','webinar.*')
        ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
        ->where('id_peserta_webinar',$id)
        ->where('email',auth::user()->email)
        ->get();
        // dd($data_bukti);
        return view('user.datapeserta',[ 'data_peserta'=>$data_peserta, 'id'=>$id]);
    }
    public function uploadbukti(Request $request)
    {

        // dd($validatedData);



            DB::table('peserta_webinar')
            ->where('id_webinar',$request->input('id-webinar'))
            ->where('email',auth::user()->email)
            ->update([

                        'bukti' =>   $request->file('file')->storeAs('data_file/fileupload/'.auth::user()->email,$request->input('id-webinar').''.'bukti.jpg')
                        // 'nir' => $request->input('nir')
                    ]);
            return redirect()->back()->with(['alert-success' => 'Berhasil Upload Bukti Pembayaran , Menunggu 1 X 24 Jam Untuk Di konfirmasi panitia']);

    }
    public function ubahpassword(Request $request)
    {

        // dd($validatedData);



            DB::table('users')
            ->where('id',$request->input('id'))
            ->where('email',auth::user()->email)
            ->update([

                        'password' =>   Hash::make($request->input('password'))
                        // 'nir' => $request->input('nir')
                    ]);
            return redirect()->back()->with(['alert-success' => 'Berhasil ubah pasword..']);

    }
    public function registerwebinar($id)
    {
        $daftar = DB::table('webinar')
        ->select('webinar.*')
        ->where('id_webinar',$id)
        ->get();
        // dd($data_bukti);
        return view('user.Pendaftaran_webinar',[ 'daftar'=>$daftar, 'id'=>$id]);
    }
}
