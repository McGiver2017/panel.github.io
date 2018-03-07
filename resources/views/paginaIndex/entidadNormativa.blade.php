@extends('layouts.appclear')

@section('content')
<div>
    <div class="text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Normativa</h2>
                    <h5>Reglas o preceptos de carácter obligatorio, emanados de una autoridad normativa, la cual tiene su fundamento de validez en una norma juridica que autoriza la produccion normativa, que tienen por objeto regular las relaciones sociales y cuyo cumplimiento está garantizado por el Estado.</h5>
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
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#manual-organizaciones" aria-expanded="false" aria-controls="collapseOne">
                                Manual de Organizaciones y Funciones
                                <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="manual-organizaciones" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                            <p align="justify"> El Manual de Organización y Funciones es un documento normativo que describe las funciones específicas a nivel de cargo o puesto de trabajo, desarrollándolas a partir de la estructura orgánica y las funciones generales establecidas en el Reglamento de Organización y Funciones-ROF 
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/UGELCP_MOF_2014.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingTwo">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#reglamento-organizaciones" aria-expanded="false" aria-controls="collapseTwo">
                                    Reglamento de Organizaciones y Funciones
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="reglamento-organizaciones" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                            <p align="justify"> Es el documento técnico normativo de gestión institucional que formaliza la estructura orgánica de la entidad, orientada al esfuerzo institucional y al logro de su misión, visión y objetivos. Contiene las funciones generales de la entidad, y las funciones específicas de los órganos y unidades orgánicas, estableciendo sus relaciones y responsabilidades</p>
                            <a href="{{ asset('ugel/Files/Normatividad/UGELCP_ROF_2014.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#lineamiento-politico" aria-expanded="false" aria-controls="collapseThree">
                                Lineamiento de Política Institucional
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="lineamiento-politico" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> Para trabajar y alcanzar las metas y objetivos trazados, la Ugel de Coronel Portillo se ha propuesto seguir  lineamientos de trabajo muy específicos, cada uno de ellos seguido de un plan de accion.
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/lineamiento_politica.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ley-reforma" aria-expanded="false" aria-controls="collapseThree">
                                Reglamento de la Ley de Reforma Magisterial
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="ley-reforma" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> El profesor es agente fundamental de la Educación y contribuye conjuntamente con la familia, la comunidad y el Estado al desarrollo integral del educando, inspirado en los principios de la democracia social.
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/ley-reforma-y-reglamento-carre_mag.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#normas-legales" aria-expanded="false" aria-controls="collapseThree">
                                Normas Legales
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="normas-legales" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            La confidencialidad es muy importante para nosotros, pero en el caso que se infrinja alguna regla y a petición del tribunal, tendremos que transmitir las informaciones confidenciales.   
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/NORMASLEGALES.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#reglamento-profesorado" aria-expanded="false" aria-controls="collapseThree">
                                Reglamento del Profesorado
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="reglamento-profesorado" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            El profesorado es agente fundamental de la educación y contribuye con la familia, la comunidad y el Estado a la formación integral del educando.
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/Reglamento_del_profesorado_N°_24029_Y_SU_MODIFICATORIA_25212.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ley-general-educacion" aria-expanded="false" aria-controls="collapseThree">
                                Ley General de Educación
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="ley-general-educacion" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify">
                            El presente Reglamento de la <strong>Ley General de Educación</strong> regula la aplicación de los lineamientos generales de las actividades educativas a nivel nacional. 
                            </p>
                            <a href="{{ asset('ugel/Files/Normatividad/leygeneraldeeducacion28044.pdf') }}" target="_blank" class="btn btn-link btn-danger">VER MÁS</a>
                        
                        </div>
                        </div>
                    </div>
                </div><!--  end acordeon -->
                </div>

            </div>
            <div class="col-md-4">
                <h3 class="margin-bottom-10">Unidad de Gestion Educativa Local</h3>
                <p>La Unidad de Gestión Educativa Local de Coronel Portillo (UGEL - CP)   inicia su funcionamiento el 24 de Octubre del Año 2003, mediante   Resolución Directoral Regional<strong> Nº 02752-2003 DREU</strong></p>
                <p> El primer Director de la UGEL - CP fue el Psicologo Juan Lopez Ruiz,   Seguido del Prof.Justo Pastor Bejar entre muchos otros grandez   Profesionales. </p>
                <p>Cabe destacar el esfuerzo de todos los trabajadores de la sede para lograr convertir  la UGEL - CP en Unidad Ejecutora Nº 303</p>
            </div>        
        </div>
    </div>
</div>
@endsection