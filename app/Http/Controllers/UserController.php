<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as tabla_principal;
class UserController extends Controller
{

    private $ruta = "usuarios";

    public function generarHeader($opcion){
        $datos = ['label' => 'Gestion de usuarios',
        'descripcion' => 'Gestiona los usuarios del sistema.',
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
        $datos = $this->generarHeader('crear');
        $user = new tabla_principal;
        return view($this->ruta.'.create',['datos'=> $datos,'objeto' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        tabla_principal::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
