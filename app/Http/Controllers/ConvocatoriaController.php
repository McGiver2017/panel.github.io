<?php

namespace App\Http\Controllers;

use App\convocatoria;
use App\archivo;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    private $ruta = "convocatoria";

    public function generarHeader($opcion){
        $datos = ['label' => 'Gestion de Convocatorias',
            'descripcion' => 'Gestiona las Convocatorias del sistema.',
            'ruta'=> $this->ruta,
            'opcion' => $opcion
        ];
        return $datos;
    }
    public function index()
    {
        $lista = convocatoria::get();
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
        $objeto = new convocatoria();
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
        $crear = convocatoria::create($request->all());
        if ($crear){
            return redirect('convocatoria');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function show(convocatoria $convocatoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objeto = convocatoria::find($id);
        $datos = $this->generarHeader('editar');
        $archivos = archivo::get();
        return view($this->ruta.'.edit',['objeto'=>$objeto,'datos'=> $datos,'archivos' => $archivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actualizar = convocatoria::updateOrCreate(['id' => $id], $request->all());
        if ($actualizar) {
            return redirect('convocatoria');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\convocatoria  $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = convocatoria::destroy($id);
        return redirect('/convocatoria');
    }
    public function cambiarEstado($id){
        $convocatoria = convocatoria::find($id);
        if ( $convocatoria->estado == 'activado'){
            $convocatoria->estado = 'desactivado';
        }
        else{
            $convocatoria->estado = 'activado';
        }
        $convocatoria->save();
        return redirect('/convocatoria');
    }
}
