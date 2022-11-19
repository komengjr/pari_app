<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use DB;
class resetpass extends Mailable
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

        $email= DB::table('users')
        ->select('users.*')
        ->where('email',$request->input('email'))
        ->get();

        DB::table('users')
        ->where('email',$request->input('email'))
        ->update([
                    'remember_token' =>$request->session()->token(),
                ]);
        return $this->from('user@paripengdakalbar.com')
        ->subject('Reset Password User PARI PENGDA KALBAR')
        ->view('kirimemail')
        ->with(
         [
             'token' =>  $request->session()->token(),
             'id' =>  $email[0]->id,
            //  'website' => 'www.malasngoding.com',
         ]);
    }
}
