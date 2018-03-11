<?php

namespace App\Http\Controllers;

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
        $lista = tabla_principal::get();
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
        $objeto = new tabla_principal();
        $datos = $this->generarHeader('crear');
        return view($this->ruta.'.create',['objeto'=>$objeto,'datos'=> $datos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crear = tabla_principal::create($request->all());
        if ($crear){
            return redirect('comunicados');
        }
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
        return view($this->ruta.'.edit',['objeto'=>$objeto,'datos'=> $datos]);
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
        $actualizar = tabla_principal::updateOrCreate(['id' => $id], $request->all());
        if ($actualizar) {
            return redirect('comunicados');
        } else {
            return redirect()->back();
        }
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
