<?php

namespace App\Http\Controllers;

use App\notasprensa as tabla_principal;
use App\notasprensa;
use App\archivo;
use Illuminate\Http\Request;

class NotasprensaController extends Controller
{
    private $ruta = "notas-de-prensa";

    public function generarHeader($opcion){
        $datos = ['label' => 'Gestion de Notas de Prensa',
        'descripcion' => 'Gestiona las Notas de prensa del sistema.',
        'ruta'=> $this->ruta,
        'opcion' => $opcion
        ];
    return $datos;
    }
    public function index()
    {
        $lista = tabla_principal::orderBy('id', 'DESC')->get();
        $datos = $this->generarHeader('mostrar');
        return view($this->ruta.'.index',['datos'=> $datos,'listas' => $lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objeto = new notasprensa();
        $datos = $this->generarHeader('crear');
        $archivos = archivo::get();
        return view($this->ruta.'.create',['objeto'=>$objeto,'datos'=> $datos,'archivos' => $archivos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = $request->file('imagen');
        $guardar = null;
        if ($imagen){
            $guardar = $imagen->store('notas','public');
        }
        $imagen = $request->file('imagen');
        tabla_principal::create([
            'titulo' => $request->input('titulo'),
            'titular' => $request->input('titular'),
            'cuerpo' => $request->input('cuerpo'),
            'fecha' => $request->input('fecha'),
            'imagen' => $guardar
        ]);
        return redirect('/notas-de-prensa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objeto = tabla_principal::find($id);
        $datos = $this->generarHeader('ver');
        return view($this->ruta.'.show',['objeto'=>$objeto,'datos'=> $datos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objeto = notasprensa::find($id);
        $datos = $this->generarHeader('editar');
        $archivos = archivo::get();
        return view($this->ruta.'.edit',['objeto'=>$objeto,'datos'=> $datos,'archivos' => $archivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = $request->file('imagen');
        $guardar = null;
        $tabla = tabla_principal::find($id);
        if ($imagen){
            $guardar = $imagen->store('notas','public');
        }
        else{
            $guardar = $tabla->imagen;
        }
        tabla_principal::updateOrCreate(['id' => $id],[
            'titulo' => $request->input('titulo'),
            'titular' => $request->input('titular'),
            'cuerpo' => $request->input('cuerpo'),
            'fecha' => $request->input('fecha'),
            'imagen' => $guardar
        ]);
        return redirect('/notas-de-prensa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = tabla_principal::destroy($id);
        return redirect('/notas-de-prensa');
    }
}
