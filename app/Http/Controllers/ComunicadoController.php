<?php

namespace App\Http\Controllers;

use App\archivo;
use App\comunicado as tabla_principal;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    private $ruta = "comunicados";

    public function generarHeader($opcion){
        $datos = ['label' => 'Gestion de comunicados',
        'descripcion' => 'Gestiona los comunicados del sistema.',
        'ruta'=> $this->ruta,
        'opcion' => $opcion
        ];
    return $datos;
    }
    public function index()
    {
        $lista = tabla_principal::orderBy('id', 'DESC')->get();
        $archivos = archivo::get();
        $datos = $this->generarHeader('mostrar');
        return view($this->ruta.'.index',['datos'=> $datos,'listas' => $lista,'archivos' => $archivos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objeto = new tabla_principal();
        $archivos = archivo::get();
        $datos = $this->generarHeader('crear');
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
            $guardar = $imagen->store('comunicados','public');
        }
        $imagen = $request->file('imagen');
        tabla_principal::create([
            'titular' => $request->input('titular'),
            'descripcion' => $request->input('descripcion'),
            'fecha' => $request->input('fecha'),
            'imagen' => $guardar
        ]);
        return redirect('/comunicados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comunicados  $comunicados
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objeto = tabla_principal::find($id);
        $datos = $this->generarHeader('crear');
        return view($this->ruta.'.show',['objeto'=>$objeto,'datos'=> $datos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comunicados  $comunicados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objeto = tabla_principal::find($id);
        $datos = $this->generarHeader('editar');
        $archivos = archivo::get();
        return view($this->ruta.'.edit',['objeto'=>$objeto,'datos'=> $datos,'archivos' => $archivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comunicados  $comunicados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = $request->file('imagen');
        $guardar = null;
        $tabla = tabla_principal::find($id);
        if ($imagen){
            $guardar = $imagen->store('comunicados','public');
        }
        else{
            $guardar = $tabla->imagen;
        }
        tabla_principal::updateOrCreate(['id' => $id],[
            'titular' => $request->input('titular'),
            'descripcion' => $request->input('descripcion'),
            'fecha' => $request->input('fecha'),
            'imagen' => $guardar
        ]);
        return redirect('comunicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comunicados  $comunicados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = tabla_principal::destroy($id);
        return redirect('/comunicados');
    }
}
