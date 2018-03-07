@extends('layouts.appclear')

@section('content')
<div>
    <div class="text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Archivo de Comunicados</h2>
                    <h5>En este apartado podras visualizar un archivo de los comunicados emitidos hasta el momento.</h5>
                </div>
            </div>
            <br><br>
        <div class="row">
            <div class="col-md-8">
            <div id="acordeon">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingOne">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#guia-monitoreo" aria-expanded="false" aria-controls="collapseOne">
                                Guia de Monitoreo y Reconocimiento de logros Ambientales
                                <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="guia-monitoreo" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                            <p align="justify"> Guía Para La Evaluación Del Enfoque Ambiental Y El  Reconocimiento De Logros Ambientales De Las Instituciones Educativas Públicas Y  Privadas De La Educación Básica Para El Año 2016.
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/Guia_para_el_monitoreo_evaluacion_y_reconocimiento_de_logros_ambientales_2016.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingTwo">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#aplicativo-inscripcion" aria-expanded="false" aria-controls="collapseTwo">
                                    Aplicativo de Inscripción
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="aplicativo-inscripcion" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                            <p align="justify"> 
                            Aqui podras descargar el aplicativo para la inscripción al concurso medio ambiental entre Instituciones Educativas, es muy facil de usar
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/matriz_logros.xlsm') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#relacion-postulantes" aria-expanded="false" aria-controls="collapseThree">
                                Relación de postulantes para concurso público
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="relacion-postulantes" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            Esta es una relación de docentes que presentaron documentación para el consurso público de acceso al cargo de especialista en educación Ugel Coronel Portillo
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/postulantes.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ley-reforma" aria-expanded="false" aria-controls="collapseThree">
                                Resoluciones Directorales
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="ley-reforma" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            Podras encontrar resoluciones Directorales varias<strong></strong>
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/RESOLUCIONSEC.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#cronogramas" aria-expanded="false" aria-controls="collapseThree">
                                Cronograma de fechas para el consurso Público de plazas
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="cronogramas" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            &nbsp;Cronograma De Concurso Para Plazas Directivas De II.EE Y  Especialistas De UGEL CP<strong> </strong>
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/CRONOGRAMA.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#relacion-seleccionado" aria-expanded="false" aria-controls="collapseThree">
                                Relación de Seleccionados para Entrevista Personal
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="relacion-seleccionado" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            En este apartado encontrara una lista detallada de los seleccionados para la entrevista personal por el cargo de especialista en educación
                            </p>
                            <a href="{{ asset('ugel/Files/Archivo/postulantes.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                    </div>

            </div>
                  
        </div>
    </div>
</div>
@endsection