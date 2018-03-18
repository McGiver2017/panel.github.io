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

Route::get('/', 'paginawebController@index');
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
Route::resource('/mensajes','MensajedocController');
Route::resource('/archivos','ArchivoController');
Route::resource('/convocatoria','ConvocatoriaController');

Route::get('/ugelcp', 'paginawebController@ugelcp');
Route::get('/entidad', 'paginawebController@entidad');
Route::get('/entidad/normativa', 'paginawebController@normativa');
Route::get('/entidad/archivo', 'paginawebController@archivo');
Route::get('/funcionarios', 'paginawebController@funcionarios');
Route::get('/direccion', 'paginawebController@direccion');
Route::get('/agp', 'paginawebController@agp');
Route::get('/agi', 'paginawebController@agi');
Route::get('/administracion', 'paginawebController@administracion');
Route::get('/abastecimimento', 'paginawebController@abastecimimento');
Route::get('/contabilidad', 'paginawebController@contabilidad');
Route::get('/personal', 'paginawebController@personal');
Route::get('/escalafon', 'paginawebController@escalafon');
Route::get('/infraestructura', 'paginawebController@infraestructura');
Route::get('/remuneraciones', 'paginawebController@remuneraciones');
Route::get('/tesoreria', 'paginawebController@tesoreria');
Route::get('/oci', 'paginawebController@oci');
Route::get('/transparencia', 'paginawebController@transparencia');
Route::get('/reclamos', 'paginawebController@reclamo_quejas');
Route::get('/convocatorias', 'paginawebController@convocatoria');

Route::get('/convocatoria/estado/{id}', 'ConvocatoriaController@cambiarEstado');

//shows comunicados and Notas de Prensas
Route::get('/comunicado/{id}', 'paginawebController@showComunicado');
Route::get('/notasdeprensa/{id}', 'paginawebController@showNotas');