@extends('layouts.appclear')

@section('content')
    <div class="section section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Reclamos o quejas</h2>
                    <p>Rellene todos los datos del formulario, y le responderemos a traves de correo electronico.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 ml-auto mr-auto text-center">
                    <h3 class="title"><small>Complete los campos para evitar cualquier error.</small></h3>
                    {!! Form::open(['url'=>'/mensajes','method' => 'POST' ]) !!}
                        <div class="row">
                            <div class="col-md-4 text-right">
                                DNI:
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('dni', null, ['class'=>'form-control','placeholder'=>'Ingrese su DNI','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Nombres
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('nombres', null, ['class'=>'form-control','placeholder'=>'Ingrese sus nombres','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Apellidos
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('apellidos', null, ['class'=>'form-control','placeholder'=>'Ingrese sus apellidos','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Domicilio
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('domicilio', null, ['class'=>'form-control','placeholder'=>'Ingrese su direccion de domicilio','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Tel. Fijo / Celular
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('telefono', null, ['class'=>'form-control','placeholder'=>'Ingrese su direccion de domicilio','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Correo Electronico
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('correo', null, ['class'=>'form-control','placeholder'=>'Ingrese su direccion de domicilio','required']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Tipificación de la Incidencia
                            </div>
                            <div class="col-md-8">
                                {!! Form::select('tipo', $tipo,null,['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Tipo de Usuario
                            </div>
                            <div class="col-md-8">
                                {!! Form::select('tipo_usuario', $tipo_usuario,null,['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Lugar de Incidencia
                            </div>
                            <div class="col-md-8">
                                {!! Form::select('tipo_incidencia', $area,null,['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4 text-right">
                                Detalle
                            </div>
                            <div class="col-md-8">
                                {!! Form::textarea('detalle', null, ['class'=>'form-control','placeholder'=>'Mensaje','rows' => '7','maxlength' => '250']) !!}
                            </div>
                            <div class="col-md-6 ml-auto mr-auto">
                                <input type="submit" value="Enviar" class="btn btn-primary btn-block btn-round">
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection