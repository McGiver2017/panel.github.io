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
                    <div class="card">
                        <div class="card-header">
                            <h4>Comunicado {{ $comunicado->id }}</h4>
                            <p class="category">{{ $comunicado->fecha }}</p>
                        </div>
                        <div class="text-justify pr-4 card-body alto-definido">
                            @php
                                echo substr($comunicado->descripcion,0,150).'...';
                            @endphp
                            <a class="link-info" href="{{ url('comunicado/'.$comunicado->id) }}">ver mas</a>
                        </div>
                    </div>
                </div>
                @endforeach
                  
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="more-info mt-2 mb-4 text-center">NOTAS DE PRENSA</h3>
            <div class="row">
            @foreach($notas as $nota)
                <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{$nota->titulo}}</h5>
                            </div>
                            <div class="pr-4 card-body alto-definido-nota" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-description"><img src="{{$nota->imagen}}" alt="Rounded Image" class="img-rounded img-responsive">
                                        </p>
                                        <p class="category "><span class="label label-default">{{$nota->fecha}}</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-justify">
                                            <?php
                                            echo substr($nota->cuerpo,0,150);
                                            ?>
                                        </p>
                                        <a class="link-info" href="{{ url('notasdeprensa/'.$nota->id) }}">ver mas</a>
                                    </div>
                                </div>

                            </div>
                        </div>
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
    @include('paginaIndex.modal')
    @include('paginaIndex.indexEnlacesDestacadados')

@endsection
@section('script')
    <script>
        $(document).ready(
            function () {
                $('#noticeModal').modal('show');
            }
        )
    </script>
    @endsection

