<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use App\Mail\Welcome;

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
    return view('welcome');
});
Route::get('welcome',function(){
    Mail::to('xmcgiver12@gmail.com','McGiver')
        ->send(new Welcome);
   /* Mail::send('emails.welcome',['name' => 'McGiver'], function (Message $message){
        $message->to('xmcgiver12@gmail.com','McGiver')
            ->from('admin@grupoalania.com','Señor')
            ->subject('Bienvenido');
    });*/
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/usuarios','UserController');
Route::resource('/comunicados','ComunicadoController');
Route::resource('/notas-de-prensa','NotasprensaController');
