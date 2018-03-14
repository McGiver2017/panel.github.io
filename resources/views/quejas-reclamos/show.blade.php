@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $objeto->dni }}</h4>
                    <p class="category">De: {{ $objeto->nombres.' '.$objeto->apellidos }}</p>
                    <p class="category">Correo: {{ $objeto->correo }}</p>
                    <p class="category">Tipo: {{ $objeto->tipo }}</p>
                </div>
                <div class="card-body">
                    @php
                    echo $objeto->detalle;
                    @endphp
                </div>

                <div class="card-footer">
                    <p class="category">Fecha: {{ $objeto->created_at }}</p>
                    <p class="category">Estado: {{ $objeto->estado }}</p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@section('script')
@endsection

@endsection
