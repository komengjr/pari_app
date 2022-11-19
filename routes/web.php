<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
// use mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('admin.invoice');
});
Route::get('reset', function () {
    return view('reset_password');
});


Auth::routes();
// Route::get('/resetpassword','Password@reset');
Route::get('resetpassword/{id}/{ids}','Password@reset');
Route::get('hapusdatapeserta/{id}','HomeController@hapusdatapeserta');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('buktipembayaran/{id}',['as'=>'buktipembayaran','uses'=> 'HomeController@buktipembayaran']);
Route::get('datapeserta/{id}',['as'=>'datapeserta','uses'=> 'UserController@datapeserta']);
Route::get('registerwebinar/{id}',['as'=>'registerwebinar','uses'=> 'UserController@registerwebinar']);
// Route::post('daftarpesertawebinar',['as'=>'daftarpesertawebinar','uses'=> 'HomeController@daftarpesertawebinar']);

Route::post('daftarpesertawebinar',['as'=>'daftarpesertawebinar','uses'=> 'HomeController@daftarpesertawebinar']);

Route::post('/updatedata', 'HomeController@updatedata');
Route::post('/daftarwebinar', 'HomeController@daftarwebinar');
Route::post('/uploadbukti', 'UserController@uploadbukti');
Route::post('inputpeserta', 'HomeController@inputpeserta');
Route::post('daftar', 'HomeController@daftar');
Route::post('ubahpassword', 'UserController@ubahpassword');
Route::post('resetpassword', 'Password@resetpassword');
Route::post('newpassword', 'Password@newpassword');
// Route::post('daftarpesertawebinar', 'HomeController@daftarpesertawebinar');




// Menu Mail
Route::get('/mail', 'HomeController@mail');

Route::get('kiriminvoice','testcontroller@kiriminvoice');
Route::get('email','testcontroller@index');
Route::post('email/send','testcontroller@send');


Route::post('kirimpesanemail','testcontroller@kirimpesanemail');
Route::post('kirimpesanbroadcast','testcontroller@kirimpesanbroadcast');
Route::post('kirimpesanbroadcastbayar','testcontroller@kirimpesanbroadcastbayar');



Route::get('showpretest','HomeController@showpretest');
Route::get('showposttest','HomeController@showposttest');




Route::get('pretest','HomeController@pretest');
Route::get('posttest','HomeController@posttest');
Route::post('simpandatapretest','HomeController@simpandatapretest');
Route::post('simpandataposttest','HomeController@simpandataposttest');
