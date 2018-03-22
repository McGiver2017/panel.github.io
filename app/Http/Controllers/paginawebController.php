<?php

namespace App\Http\Controllers;

use App\convocatoria;
use Illuminate\Http\Request;
use App\comunicado;
use App\notasprensa;

class paginawebController extends Controller
{
    public function index(){
        $comunicados = comunicado::orderBy('id', 'DESC')->paginate(8);
        $notas = notasprensa::orderBy('id', 'DESC')->paginate(8);
        $comunicadoModal = comunicado::orderBy('id', 'DESC')->get()->take(1);
        return view('paginaIndex.indexComunicadosNotas',['comunicados' => $comunicados,'notas' => $notas,'comunicadosModal' => $comunicadoModal]);
    }
    public function  showComunicado($id){
        $objeto = comunicado::find($id);
        $comunicados = comunicado::orderBy('id', 'DESC')->get();
        return view('paginaIndex.show.comunicado',['objeto'=>$objeto,'comunicados'=>$comunicados]);
    }
    public function  showNotas($id){
        $objeto = notasprensa::find($id);
        $notas = notasprensa::orderBy('id', 'DESC')->get();
        return view('paginaIndex.show.notas-de-prensa',['objeto'=>$objeto,'notasDePrensa'=>$notas]);
    }
    public function ugelcp(){
        return view('paginaIndex.ugelcp');
    }
    public function entidad(){
        return view('paginaIndex.entidad');
    }
    public function normativa(){
        return view('paginaIndex.entidadNormativa');
    }
    public function archivo(){
        return view('paginaIndex.entidadArchivo');
    }
    public function funcionarios(){
        return view('paginaIndex.funcionarios');
    }
    public function direccion(){
        return view('paginaIndex.direccion');
    }
    public function agp(){
        return view('paginaIndex.agp');
    }
    public function agi(){
        return view('paginaIndex.agi');
    }
    public function administracion(){
        return view('paginaIndex.administracion');
    }
    public function abastecimimento(){
        return abort(404);
    }
    public function bienestar(){
        return view('paginaIndex.bienestar');
    }
    public function personal(){
        return view('paginaIndex.personal');
    }
    public function contabilidad(){
        return view('paginaIndex.contabilidad');
    }
    public function escalafon(){
        return view('paginaIndex.escalafon');
    }
    public function infraestructura(){
        return view('paginaIndex.infraestructura');
    }
    public function remuneraciones(){
        return view('paginaIndex.remuneraciones');
    }
    public function tesoreria(){
        return view('paginaIndex.tesoreria');
    }
    public function oci(){
        return view('paginaIndex.oci');
    }
    public function transparencia(){
        return view('paginaIndex.transparencia');
    }
    public function reclamo_quejas(){
        $tipo_usuario = ['-- seleccione una opción --','Director / Subdirector' => 'Director / Subdirector', 'Docente' => 'Docente','Estudiante' => 'Estudiante','Padre de Familia' => 'Padre de Familia'];
        $area = ['-- seleccione una opción --','Area de gestión administrativa' => 'Area de gestión administrativa'];
        $tipo = ['-- seleccione una opción --','reclamo' => 'Reclamo', 'queja' => 'Queja','denuncia' => 'Denuncia','sol_info' => 'Solicitud de Información'];
        return view('paginaIndex.reclamo-quejas',['tipo_usuario' => $tipo_usuario,'area' => $area,'tipo' => $tipo]);
    }
    public function convocatoria(){
        $listas = convocatoria::get();
        return view('paginaIndex.convocatoria',['listas' => $listas]);
    }
}
