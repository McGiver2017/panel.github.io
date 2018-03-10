@extends('layouts.appclear')

@section('content')
@include('paginaIndex.indexCarousel')
@include('paginaIndex.indexFeature')
<div class="row mt-4">
        <div class="col-md-6">
            <h3 class="more-info mt-2 mb-4 text-center">COMUNICADOS</h3>
            <div class="row">
                @foreach($comunicados as $comunicado)
                <div class="col-md-12 col-sm-12">
                    <div class="card card-just-text card-with-shadow"  >
                        <div class="card-body">
                            <h6 class="card-category"></h6>
                            <h4 class="card-title">Comunicado {{$comunicado->id}}</h4>
                            <p class="">
                                <?php
                                echo $comunicado->fecha.'. '.$comunicado->descripcion;
                                ?>

                            </p>
                        </div>
                    </div> <!-- end card -->
                </div>
                @endforeach
                  
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="more-info mt-2 mb-4 text-center">NOTAS DE PRENSA</h3>
            <div class="row">
            @foreach($notas as $nota)
                <div class="col-md-12 col-sm-12">
                    <div class="card card-image p-4">
                        <div class="card-body">
                            <div class="row">
                            <h4 class="card-title">{{$nota->titulo}}</h4>
                                
                                <div class="col-md-6">
                                    <p class="card-description"><img src="{{$nota->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                                    </p>
                                    <h6 class="card-category mt-2"><span class="label label-default">{{$nota->fecha}}</span></h6>
                                
                                </div>
                                <div class="col-md-6">                                    
                                    <p class="card-description">
                                    {{$nota->cuerpo}}
                                    </p>
                                </div>
                            </div>
                        
                            </div>
                    </div> <!-- end card -->
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-2 mx-auto">
            @if(count($comunicados))
                        {{ $comunicados->links() }}
                    @endif  
        </div>
        
    </div>
    @include('paginaIndex.indexEnlacesDestacadados')
@endsection
