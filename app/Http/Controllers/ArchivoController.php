<?php

namespace App\Http\Controllers;

use App\archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    private $ruta = "carga-de-archivos";

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
        $lista = archivo::get();
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
        $objeto = new archivo();
        $datos = $this->generarHeader('crear');
        $tipo = ['Imagen' => 'Imagen','Documento' => 'Documento'];
        return view($this->ruta.'.create',['objeto'=>$objeto,'datos'=> $datos,'tipo' => $tipo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = $request->file('archivo');
        archivo::create([
            'descripcion' => $request->input('descripcion'),
            'tipo' => $request->input('tipo'),
            'archivo' => $imagen->store('archivos','public')
        ]);
        return redirect('/archivos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objeto = archivo::find($id);
        $datos = $this->generarHeader('editar');
        $tipo = ['imagen' => 'Imagen','documento' => 'Documento'];
        return view($this->ruta.'.edit',['objeto'=>$objeto,'datos'=> $datos,'tipo' => $tipo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = $request->file('archivo');
        $guardar = null;
        $tabla = archivo::find($id);
        if ($imagen){
            $guardar = $imagen->store('archivos','public');
        }
        else{
            $guardar = $tabla->imagen;
        }
        archivo::updateOrCreate(['id' => $id],[
            'descripcion' => $request->input('descripcion'),
            'tipo' => $request->input('tipo'),
            'imagen' => $guardar
        ]);
        return redirect('/archivos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = archivo::destroy($id);
        return redirect('/archivos');
    }
}
