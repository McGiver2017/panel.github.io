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
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <h3 class="title"><small>Complete los campos para evitar cualquier error.</small></h3>
                    {!! Form::open(['url'=>'/mensajes','method' => 'POST' ]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::text('nombres', null, ['class'=>'form-control','placeholder'=>'Ingrese sus nombres']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('apellidos', null, ['class'=>'form-control','placeholder'=>'Ingrese sus apellidos']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::text('correo', null, ['class'=>'form-control','placeholder'=>'Ingrese su correo']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('asunto', null, ['class'=>'form-control','placeholder'=>'Asunto']) !!}
                            </div>
                        </div>
                        {!! Form::select('tipo', ['reclamo' => 'Reclamo', 'queja' => 'Queja'],null,['class' => 'form-control']) !!}
                        {!! Form::textarea('mensaje', null, ['class'=>'form-control','placeholder'=>'Mensaje','rows' => '7','maxlength' => '250']) !!}
                        <div class="row">
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