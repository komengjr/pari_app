<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use DB;
use Mail;
class kiriminvoice extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)

    {
        $cekdata = DB::table('peserta_webinar')
        ->select('peserta_webinar.*')
        ->where('id_webinar',"web_002")
        ->where('no_registrasi','!=',NULL)
        ->count();
        $cekpeserta = DB::table('peserta_webinar')
        ->select('peserta_webinar.*','users.*')
        ->join('users','peserta_webinar.email','=','users.email')
        ->where('peserta_webinar.id_peserta_webinar',$request->input('id_peserta_webinar'))
        ->get();
        $no = $cekdata;
        $email = $cekpeserta[0]->email;
        if ($cekdata == 0) {
            DB::table('peserta_webinar')
            ->where('id_peserta_webinar',$request->input('id_peserta_webinar'))
            ->update([
                        'status' => 1,
                        'no_registrasi' => "001",
                    ]);
            return redirect()->back()->with(['alert-success' => 'Sukses']);
        } else {
            if (substr($cekdata,2,1) != "") {
                $no_reg = $cekdata + 1;


                try{
                    Mail::send('isiemail', array('pesan' => "Cek Di aplikasi Pari Pengda Kalbar No Registrasi Anda Sudah ada ") , function($pesan) use($email,$cekdata,$no_reg,$cekpeserta)
                    {
                        $pesan->to($email,'Verifikasi')->subject('Selamat Anda Terdaftar Webinar');
                        $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
                        return $this->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR')
                        ->subject('INVOICE PENDAFTARAN WEBINAR')
                        ->view('admin.invoice')
                        ->with(
                         [

                            'no_invoice' =>  'WKB_00'.$no_reg,
                            'nama' =>  $cekpeserta[0]->name,
                            'nir' =>  $cekpeserta[0]->nir,
                            'email' =>  $cekpeserta[0]->email,
                            'no_hp' =>  $cekpeserta[0]->no_hp,
                         ]);
                    });
                }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }

                DB::table('peserta_webinar')
                ->where('id_peserta_webinar',$request->input('id_peserta_webinar'))
                ->update([
                            'status' => 1,
                            'no_registrasi' => $no_reg,
                            'no_invoice' => 'WKB_00'.$no_reg,
                        ]);
                return redirect()->back()->with(['alert-success' => 'Sukses']);
            } elseif(substr($cekdata,1,1) != "") {
                $no_reg = $cekdata + 1;

                try{
                    Mail::send('isiemail', array('pesan' => "Cek Di aplikasi Pari Pengda Kalbar No Registrasi Anda Sudah ada ") , function($pesan) use($email,$cekdata,$no_reg,$cekpeserta)
                    {
                        $pesan->to($email,'Verifikasi')->subject('Selamat Anda Terdaftar Webinar');
                        $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
                        return $this->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR')
                        ->subject('INVOICE PENDAFTARAN WEBINAR')
                        ->view('admin.invoice')
                        ->with(
                         [

                            'no_invoice' =>  'WKB_00'.$no_reg,
                            'nama' =>  $cekpeserta[0]->name,
                            'nir' =>  $cekpeserta[0]->nir,
                            'email' =>  $cekpeserta[0]->email,
                            'no_hp' =>  $cekpeserta[0]->no_hp,
                         ]);
                    });
                }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }

                DB::table('peserta_webinar')
                ->where('id_peserta_webinar',$request->input('id_peserta_webinar'))
                ->update([
                            'status' => 1,
                            'no_registrasi' => "0".$no_reg,
                            'no_invoice' => 'WKB_00'.$no_reg,
                        ]);
                return redirect()->back()->with(['alert-success' => 'Sukses']);
            }else{
                $no_reg = $cekdata + 1;

                try{

                    Mail::send('isiemail', array('pesan' => "Cek Di aplikasi Pari Pengda Kalbar No Registrasi Anda Sudah ada ") , function($pesan) use($email,$cekdata,$no_reg,$cekpeserta)
                    {

                        $pesan->to($email,'Verifikasi')->subject('Selamat Anda Terdaftar Webinar');
                        $pesan->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR');
                        return $this->from(env('MAIL_USERNAME','user@paripengdakalbar.com'),'PANITIA PARI PENGDA KALBAR')
                        ->subject('INVOICE PENDAFTARAN WEBINAR')
                        ->view('admin.invoice')
                        ->with(
                         [

                            'no_invoice' =>  'WKB_00'.$no_reg,
                            'nama' =>  $cekpeserta[0]->name,
                            'nir' =>  $cekpeserta[0]->nir,
                            'email' =>  $cekpeserta[0]->email,
                            'no_hp' =>  $cekpeserta[0]->no_hp,
                            //  'website' => 'www.malasngoding.com',
                         ]);
                    });
                }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }

                DB::table('peserta_webinar')
                ->where('id_peserta_webinar',$request->input('id_peserta_webinar'))
                ->update([
                            'status' => 1,
                            'no_registrasi' => "00".$no_reg,
                            'no_invoice' => 'WKB_00'.$no_reg,
                        ]);
                return redirect()->back()->with(['alert-success' => 'Sukses']);
            }


        }


    }
}
