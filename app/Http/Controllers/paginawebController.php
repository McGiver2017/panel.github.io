<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comunicado;
use App\notasprensa;

class paginawebController extends Controller
{
    public function index(){
        $comunicados = comunicado::paginate(10);
        $notas = notasprensa::paginate(10);
        return view('paginaIndex.indexComunicadosNotas',['comunicados' => $comunicados,'notas' => $notas]);
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

}
