@extends('layouts.appclear')

@section('content')

    <div class="landing-section">
        <div class="row">
            <div class="col-md-8">
                <div class="container p-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$objeto->titulo}}</h4>
                        </div>
                        <div class="pr-4 card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="card-description"><img src="{{$objeto->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                                    </p>
                                    <h6 class="card-category mt-2"><span class="label label-default">{{$objeto->fecha}}</span></h6>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-justify">
                                        <?php
                                        echo $objeto->cuerpo;
                                        ?>
                                    </p>
                                    <a class="link-info" href="{{ url('notasdeprensa/'.$objeto->id) }}">ver mas</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="mb-4">Ultimas Notas de Prensas</h3>
                @foreach($notasDePrensa as $objeto)

                    <div class="card">
                        <div class="card-header">
                            <h4>{{$objeto->titulo}}</h4>
                        </div>
                        <div class="pr-4 card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="card-description"><img src="{{$objeto->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                                    </p>
                                    <h6 class="card-category mt-2"><span class="label label-default">{{$objeto->fecha}}</span></h6>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-justify">
                                        <?php
                                        echo substr($objeto->cuerpo,0,150);
                                        ?>
                                    </p>
                                    <a class="link-info" href="{{ url('notasdeprensa/'.$objeto->id) }}">ver mas</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection