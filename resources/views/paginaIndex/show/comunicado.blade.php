@extends('layouts.appclear')

@section('content')

    <div class="landing-section">
        <div class="row">
            <div class="col-md-8">
                <div class="container p-4">
                    <div class="pl-4">
                        <h2 class="title">Comunicado {{ $objeto->id }}</h2>
                        <p class="category">{{ $objeto->fecha }}</p>
                    </div>
                    <div class="pl-4 text-justify">
                        @php
                            echo $objeto->descripcion;
                        @endphp
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="mb-4">Ultimos Comunicados</h3>
                @foreach($comunicados as $objeto)
                <div class="card">
                    <div class="card-header">
                        <h4>Comunicado {{ $objeto->id }}</h4>
                        <p class="category">{{ $objeto->fecha }}</p>
                    </div>
                    <div class="text-justify pr-4 card-body">
                        @php
                            echo substr($objeto->descripcion,0,150).'...';
                        @endphp
                        <a class="link-info" href="{{ url('comunicado/'.$objeto->id) }}">ver mas</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection