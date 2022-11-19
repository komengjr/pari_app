<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Middleware\Authenticate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\Pendaftaran_webinar;
use App\Mail\kiriminvoice;
// use Mail;
use DB;
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
        if (auth::user()->status == 0) {
            $peserta_webinar = DB::table('peserta_webinar')
            ->select('peserta_webinar.*','users.name','users.email','users.nir','users.no_hp','users.jk')
            ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
            ->join('users','users.email','=','peserta_webinar.email')
            ->get();
            $webinar = DB::table('webinar')
            ->select('webinar.*')
            ->get();
            // dd($peserta_webinar);
            return view('home',[ 'peserta_webinar' => $peserta_webinar,'webinar'=>$webinar ]);
        } else {
            $webinar = DB::table('webinar')
            ->select('webinar.*')
            ->get();
            return view('home',[ 'webinar' => $webinar ]);
        }
        // dd($peserta_webinar);


    }

    public function buktipembayaran($id)
    {
        $data_bukti = DB::table('peserta_webinar')
        ->select('peserta_webinar.*')
        ->where('id_peserta_webinar',$id)
        ->get();

        return view('admin.buktipembayaran',[ 'data_bukti'=>$data_bukti, 'id'=>$id]);
    }
    public function hapusdatapeserta($id)
    {
        DB::table('peserta_webinar')->where('id', $id)->delete();

        return redirect()->back()->with(['alert-success' => 'Berhasil Hapus Data']);
    }
    public function daftarpesertawebinar(Request $request)
    {
            $peserta_webinar = DB::table('peserta_webinar')
            ->select('peserta_webinar.*','users.name','users.email','users.nir','users.no_hp','users.jk')
            ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
            ->join('users','users.email','=','peserta_webinar.email')
            ->where('webinar.id_webinar',$request->input('judul'))
            ->get();
            // dd($peserta_webinar);
        return view('admin.datapesertawebinar',[ 'peserta_webinar' => $peserta_webinar]);
    }

    public function updatedata(Request $request)
    {

        // dd($validatedData);

        if ($request->file('file') != NULL) {
            DB::table('users')
            ->where('id',$request->input('id'))
            ->update([
                        'name' => $request->input('name'),
                        'nir' => $request->input('nir'),
                        'no_hp' => $request->input('no_hp'),
                        'gambar' =>  $request->file('file')->storeAs('data_file/fileupload/'.auth::user()->email,''.'pp.jpg')
                        // 'nir' => $request->input('nir')
                    ]);
        } else {
            DB::table('users')
            ->where('id',$request->input('id'))
            ->update([
                        'name' => $request->input('name'),
                        'nir' => $request->input('nir'),
                        'no_hp' => $request->input('no_hp'),
                        // 'nir' => $request->input('nir')
                    ]);
        }




            return redirect()->back()->with(['alert-success' => 'Berhasil Update Data']);

    }
    public function daftarwebinar(Request $request)
    {

        // dd($validatedData);

        $data = new \App\peserta_webinar();
        $data->id_peserta_webinar = auth::user()->id.$random = mt_rand(10000, 99999);
        $data->id_webinar = $request->input('id');
        $data->email = auth::user()->email;
        $data->status = 0;
        $data->save();
        return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar , selanjut nya untuk konfirmasi pembayaran ke tahap selanjutnya']);

    }
    public function daftar(Request $request)
    {

        // dd($validatedData);

        $data = new \App\users();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->nir = $request->input('nir');
        $data->password = Hash::make($request->input('password'));
        $data->status = 1;
        $data->jk = $request->input('jk');
        $data->gambar = "";
        $data->save();
        dd($request->input('jk'));
        return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar ']);

    }
    public function inputpeserta(Request $request)
    {


        Mail::to("agusprasetyoraharjo@gmail.com")->send(new kiriminvoice());
        return redirect()->back()->with(['alert-success' => 'Sukses']);


    }


    public function mail()
    {
        $data_user = DB::table('users')
        ->select('users.*')
        ->get();
        // dd($data_bukti);
        if (auth::user()->status == 0) {
            return view('admin.mail_menu',[ 'data_user'=>$data_user]);
        } else {
            # code...
        }


    }

    public function showpretest()
    {

           if (auth::user()->id == 6) {
            $ranking = DB::table('nilai_pretest')
            ->select('nilai_pretest.*','users.*')
            ->join('users','users.email','=','nilai_pretest.email')
            ->orderBy('nilai', 'DESC')
            ->orderBy('nilai_pretest.id', 'ASC')
            ->get();
            // dd($ranking);
            return view('admin.showpretest',[ 'ranking' => $ranking ]);
           } else {
               # code...
           }

    }
    public function showposttest()
    {

           if (auth::user()->id == 6) {
            $ranking = DB::table('nilai_posttest')
            ->select('nilai_posttest.*','users.*')
            ->join('users','users.email','=','nilai_posttest.email')
            ->orderBy('nilai', 'DESC')
            ->orderBy('nilai_posttest.id', 'ASC')
            ->get();
            // dd($ranking);
            return view('admin.showposttest',[ 'ranking' => $ranking ]);
           } else {
               # code...
           }

    }


    public function pretest()
    {

            $soal = DB::table('soal_test')
            ->select('soal_test.*')
            ->get();
            $ranking = DB::table('nilai_pretest')
            ->select('nilai_pretest.*','users.*')
            ->join('users','users.email','=','nilai_pretest.email')
            ->orderBy('nilai', 'DESC')
            ->orderBy('nilai_pretest.id', 'ASC')
            ->get();
            // dd($ranking);
            return view('user.formtest',[ 'soal' => $soal,'ranking' => $ranking ]);

    }
    public function simpandatapretest(Request $request)
    {
            $nilai = 0;
            $cek_nilai = DB::table('nilai_pretest')
            ->select('nilai_pretest.*')
            ->where('email',auth::user()->email)
            ->where('kode_ujian',$request->input('kode_ujian'))
            ->get();
        if ($cek_nilai->isempty()) {

            $soal = DB::table('soal_test')
            ->select('soal_test.*')
            ->where('kode_ujian',$request->input('kode_ujian'))
            ->get();



            foreach ($soal as $data_soal) {

                if ($data_soal->id = $request->input('soal'.$data_soal->id)) {

                    if ($data_soal->jawaban ==  $request->input('jawaban'.$data_soal->id)) {
                        $nilai = $nilai + 1;
                    } else {
                        # code...
                    }


                } else {
                    # code...
                }

            }


            $data = new \App\nilai_pretest();
            $data->kode_ujian = $request->input('kode_ujian');
            $data->id_webinar = 0;
            $data->email = auth::user()->email;
            $data->nilai = $nilai * 10;
            $data->save();
            return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar , selanjut nya untuk konfirmasi pembayaran ke tahap selanjutnya']);

        } else {
            return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar , selanjut nya untuk konfirmasi pembayaran ke tahap selanjutnya']);
        }




    }

    public function posttest(Request $request)
    {


        $soal = DB::table('soal_test')
        ->select('soal_test.*')
        ->get();
        $ranking = DB::table('nilai_posttest')
        ->select('nilai_posttest.*','users.*')
        ->join('users','users.email','=','nilai_posttest.email')
        ->orderBy('nilai', 'DESC')
        ->orderBy('nilai_posttest.id', 'ASC')
        ->get();
        // dd($ranking);
        return view('user.posttest',[ 'soal' => $soal,'ranking' => $ranking ]);

    }
    public function simpandataposttest(Request $request)
    {
            $nilai = 0;
            $cek_nilai = DB::table('nilai_posttest')
            ->select('nilai_posttest.*')
            ->where('email',auth::user()->email)
            ->where('kode_ujian',$request->input('kode_ujian'))
            ->get();
        if ($cek_nilai->isempty()) {

            $soal = DB::table('soal_test')
            ->select('soal_test.*')
            ->where('kode_ujian',$request->input('kode_ujian'))
            ->get();



            foreach ($soal as $data_soal) {

                if ($data_soal->id = $request->input('soal'.$data_soal->id)) {

                    if ($data_soal->jawaban ==  $request->input('jawaban'.$data_soal->id)) {
                        $nilai = $nilai + 1;
                    } else {
                        # code...
                    }


                } else {
                    # code...
                }

            }


            $data = new \App\nilai_posttest();
            $data->kode_ujian = $request->input('kode_ujian');
            $data->id_webinar = 0;
            $data->email = auth::user()->email;
            $data->nilai = $nilai * 20;
            $data->save();
            return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar , selanjut nya untuk konfirmasi pembayaran ke tahap selanjutnya']);

        } else {
            return redirect()->back()->with(['alert-success' => 'Berhasil Mendaftar , selanjut nya untuk konfirmasi pembayaran ke tahap selanjutnya']);
        }



    }
}
