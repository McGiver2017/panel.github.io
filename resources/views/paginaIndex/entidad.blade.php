@extends('layouts.appclear')

@section('content')
<div>
    <div class="text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">ENTIDADES</h2>
                </div>
            </div>
            <br><br>
            <div class="row">					
                <div class="col-md-6">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-bank"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">ORGANIGRAMA</h4>
                            <a href="{{ asset('ugel/Files/Organigrama.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">DIRECTORIO</h4>
                            <a href="{{ asset('ugel/Files/DIRECTORIO_2017.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-single-copy-04"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">ANEXOS</h4>
                            <a href="{{ asset('ugel/Files/RELACION DE ANEXOS.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-single-02"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">NORMATIVA</h4>
                            <a href="{{ url('entidad/normativa') }}" class="btn btn-link btn-danger">VER MAS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-single-02"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">ARCHIVO</h4>
                            <a href="{{ url('entidad/archivo') }}" class="btn btn-link btn-danger">VER MAS</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection