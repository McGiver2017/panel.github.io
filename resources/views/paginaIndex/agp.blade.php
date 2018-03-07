@extends('layouts.appclear')

@section('content')
<div>
    <div class="text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-pills-info">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#concurso-escolar" role="tab">Concurso Escolar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#materiales-educativos" role="tab">Materiales Educativos 2018</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#normativa" role="tab">Normativa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#convocatoria" role="tab">Convocatoria</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#sesiones-aprendizaje" role="tab">Sesiones de aprendizajes 2018</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="tab-content text-left mt-2">
                        <div class="tab-pane active mt-4" id="concurso-escolar" role="tabpanel"> 
                            @include('paginaIndex.componentesagp.concurso-escolar')
                        </div>
                        <div class="tab-pane mt-4" id="materiales-educativos" role="tabpanel">
                            @include('paginaIndex.componentesagp.materiales-educativos')
                        </div>
                        <div class="tab-pane mt-4" id="normativa" role="tabpanel">
                            @include('paginaIndex.componentesagp.normativa')
                        </div>
                        <div class="tab-pane mt-4" id="convocatoria" role="tabpanel">
                            @include('paginaIndex.componentesagp.convocatoria')
                        </div>
                        <div class="tab-pane mt-4" id="sesiones-aprendizaje" role="tabpanel">
                            @include('paginaIndex.componentesagp.sesiones-aprendizaje')
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Documentación Anexa</h2>
                        <h5>En este apartado puede visualizar documentación referente a esta área</h5>
                    </div>
                    <hr>
                    <div class="col-md-7 col-sm-7">
                        <div class="row mb-4 pr-4">
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#datos-generales" role="tab" data-toggle="tab" aria-expanded="false">Datos Generales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#enfoques-de-monitoreo" role="tab" data-toggle="tab" aria-expanded="false">Enfoques de Monitores</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#marco-legal" role="tab" data-toggle="tab" aria-expanded="false">Marco Legal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#marco-orientador" role="tab" data-toggle="tab" aria-expanded="false">Marco Orientador</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-6 p-5">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active " id="datos-generales" aria-expanded="false">
                                        <p align="justify">Datos generales sobre el área y los distintos especialistas
                                            que laboran en nuestras oficinas</p>
                                        <a href="{{ asset('ugel/Files/AGP/datosgenerales.pdf') }}" target="_blank"><span class="label label-primary">IR AL SITIO</span></a>
                                    </div>
                                    <div class="tab-pane pl-2" id="enfoques-de-monitoreo">
                                        <p align="justify">El monitoreo y acompañamiento es una estrategia orientada
                                            a generar cambios en los actores involucrados con el
                                            desarrollo pedagógico, informece.</p>
                                            <a href="{{ asset('ugel/Files/AGP/ENFOQUESDELMONITOREO.pdf') }}" target="_blank"><span class="label label-default">IR AL SITIO</span></a>
                                    </div>
                                    <div class="tab-pane" id="marco-legal" aria-expanded="false">
                                        <p align="justify">En esta sección podrá informarce sobre las leyes con las
                                            que nuestras oficinas accionan.
                                        </p>
                                        <a href="{{ asset('ugel/Files/AGP/MARCOLEGAL.pdf') }}" target="_blank"><span class="label label-success">IR AL SITIO</span></a>
                                    </div>
                                    <div class="tab-pane" id="marco-orientador" aria-expanded="false">
                                        <p align="justify">Para la formulacion del PLAN DE MONITOREO LOCAL DE CORONEL
                                            PORTILLO se ha revisado y tomado en cuenta las orientaciones
                                            establecidas en el Proyecto Educativo Nacional.</p>
                                            <a href="{{ asset('ugel/Files/AGP/MARCOORIENTADOR.pdf') }}" target="_blank"><span class="label label-info">IR AL SITIO</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h4 class="title">Estamos para Servirle</h4>
                        <p align="justify">Puede acercarce a nuestras oficinas donde un equipo de profesionales le atendera de Lunes a Viernes en nuestros horarios de 7:30 Am a 2:30 Pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection