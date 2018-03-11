@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Comunicado {{ $objeto->id }}</h4>
                    <p class="category">{{ $objeto->fecha }}</p>
                </div>
                <div class="card-body">
                    @php
                    echo $objeto->descripcion;
                    @endphp
                </div>
                <div class="card-footer">
                    {!! Form::open(['url'=>'/comunicados/'.$objeto->id,'method' => 'Delete'] ) !!}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                    <a href="{{ asset('/comunicados/'.$objeto->id.'/edit') }}" class="btn btn-default">Editar</a>
                </div>
            </div>
        </div>

    </div>
@section('script')
@endsection

@endsection
