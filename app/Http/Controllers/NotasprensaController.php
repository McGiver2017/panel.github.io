<?php

namespace App\Http\Controllers;

use App\notasprensa as tabla_principal;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function show(notasprensa $notasprensa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function edit(notasprensa $notasprensa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notasprensa $notasprensa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notasprensa  $notasprensa
     * @return \Illuminate\Http\Response
     */
    public function destroy(notasprensa $notasprensa)
    {
        //
    }
}
