<?php

namespace App\Http\Controllers;

use App\mensajedoc;
use Illuminate\Http\Request;

class MensajedocController extends Controller
{
    private $ruta = "quejas-reclamos";

    public function generarHeader($opcion){
        $datos = ['label' => 'Gestion de quejas y reclamos',
            'descripcion' => 'Gestiona las quejas y reclamos que se recibe desde la página.',
            'ruta'=> $this->ruta,
            'opcion' => $opcion
        ];
        return $datos;
    }
    public function index()
    {
        $lista = mensajedoc::get();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crear = mensajedoc::create($request->all());
        if ($crear){
            return redirect('/reclamo-quejas');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensajedoc  $mensajedoc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objeto = mensajedoc::find($id);
        $objeto->estado = 'leido';
        $objeto->save();
        $datos = $this->generarHeader('ver');
        return view($this->ruta.'.show',['objeto'=>$objeto,'datos'=> $datos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensajedoc  $mensajedoc
     * @return \Illuminate\Http\Response
     */
    public function edit(mensajedoc $mensajedoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensajedoc  $mensajedoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensajedoc $mensajedoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensajedoc  $mensajedoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensajedoc $mensajedoc)
    {
        //
    }
}
