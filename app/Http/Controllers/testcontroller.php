<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\kiriminvoice;
use Illuminate\Http\Request;
use DB;

class testcontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function kiriminvoice()
    {
        Mail::to("agusprasetyoraharjo@gmail.com")->send(new kiriminvoice());
    }

    public function send(Request $request)
    {

        try{
            Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to($request->penerima,'Verifikasi')->subject('Selamat Anda Terdaftar Webinar');
                $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
    public function kirimpesanemail(Request $request)
    {

        try{
            Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to($request->email,'Verifikasi')->subject($request->subject);
                $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
            });
            return redirect()->back()->with(['alert-success' => 'Berhasil Kirim Pesan Email ke Alamat ',$request->email]);
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

    }
    public function kirimpesanbroadcast(Request $request)
    {
        $peserta_webinar = DB::table('peserta_webinar')
        ->select('peserta_webinar.*','users.name','users.email','users.nir','users.no_hp','users.jk')
        ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
        ->join('users','users.email','=','peserta_webinar.email')
        ->where('peserta_webinar.status',1)
        ->get();
        // dd($product);
        foreach ($peserta_webinar as $peserta) {
            $email = $peserta->email;
                try{
                    Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request,$email){
                        $pesan->to($email,'Verifikasi')->subject($request->subject);
                        $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
                    });
                    return redirect()->back()->with(['alert-success' => 'Berhasil Kirim Pesan Email ke Alamat ',$request->email]);
                }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }

        }



    }
    public function kirimpesanbroadcastbayar(Request $request)
    {
        $peserta_webinar = DB::table('peserta_webinar')
        ->select('peserta_webinar.*','users.name','users.email','users.nir','users.no_hp','users.jk')
        ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
        ->join('users','users.email','=','peserta_webinar.email')
        ->where('peserta_webinar.status',0)
        ->get();
        // dd($product);
        foreach ($peserta_webinar as $peserta) {
            $email = $peserta->email;
                try{
                    Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request,$email){
                        $pesan->to($email,'Verifikasi')->subject($request->subject);
                        $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
                    });
                    return redirect()->back()->with(['alert-success' => 'Berhasil Kirim Pesan Email ke Alamat ',$request->email]);
                }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }

        }



    }
}
