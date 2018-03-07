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
    public function agi(){
        return view('paginaIndex.agi');
    }

}
