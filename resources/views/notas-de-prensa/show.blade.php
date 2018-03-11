@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $objeto->titulo }}</h4>
                    <p class="category">{{ $objeto->fecha }}</p>
                </div>
                <div class="card-body">
                    @php
                    echo $objeto->cuerpo;
                    @endphp
                    <p class="card-description"><img src="{{$objeto->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                    </p>
                </div>

                <div class="card-footer">
                    {!! Form::open(['url'=>'/notas-de-prensa/'.$objeto->id,'method' => 'Delete'] ) !!}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                    <a href="{{ asset('/notas-de-prensa/'.$objeto->id.'/edit') }}" class="btn btn-default">Editar</a>
                </div>
            </div>
        </div>

    </div>
@section('script')
@endsection

@endsection
