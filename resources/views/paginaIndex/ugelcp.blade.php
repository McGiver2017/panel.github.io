@extends('layouts.appclear')

@section('content')
<div class="section text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">MISIÓN, VISIÓN y RESEÑA HISTORICA DE LA UGEL DE CORONEL PORTILLO</h2>
                </div>
            </div>
            <br><br>
            <div class="section row mt-4 mb-4">
                <div class="col-md-12 col-sm-12">
                    <div class="row mb-4 pr-4">
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " href="#mision" role="tab" data-toggle="tab" aria-expanded="false">Misión</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#vision" role="tab" data-toggle="tab" aria-expanded="false">Visión</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#reseña" role="tab" data-toggle="tab" aria-expanded="false">Reseña Historica</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-8 col-sm-8 col-6">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="mision" aria-expanded="false">
                            <p align="justify">Institución desconcentrada, responsable de brindar actualización pedagógica, institucional y administrativa con supervisión y monitoreo permanente para una educación de calidad. Fomentando la investigación e innovación científica y tecnológica con la participación de los diferentes sectores sociales y organismos intersectoriales en el ámbito de nuestra jurisdicción”</p>
                                <img src="{{asset('ugel/img/blog/image1.jpg')}}" alt="Rounded Image" class="img-rounded img-responsive">
                                        
                            </div>
                                <div class="tab-pane pl-2" id="vision">
                                    <p align="justify"> “Al año 2021, en la Provincia de Coronel Portillo, se imparte una educación holística, humanista, científica y tecnológica, formando ciudadanos críticos y participativos; con maestros y alumnos proactivos, innovadores, creativos e investigadores; aplicando una Gestión Educativa a través de instancias descentralizadas, eficaces y eficientes, practicando valores; en una sociedad democrática, justa y solidaria con inclusión. Identificada en el contexto multicultural, preservando el medio ambiente orientado al desarrollo sostenible”</p>
                                    <img src="{{asset('ugel/img/blog/image11.jpg')}}" alt="Rounded Image" class="img-rounded img-responsive">
                            
                                </div>
                            <div class="tab-pane" id="reseña" aria-expanded="false">
                                <h4><strong>RESEÑA HISTÓRICA </strong></h4>
                                <p align="justify">La Unidad de Gestión Educativa Local de Coronel Portillo (UGEL - CP) inicia su funcionamiento el 24 de Octubre del Año 2003, mediante Resolución Directoral Regional<strong>&nbsp;</strong><strong>Nº 02752-2003 DREU</strong>.</p>
                                <p align="justify">El primer director de la UGEL de Coronel Portillo, fue el <strong>Psicólogo Juan López Ruiz</strong>, Seguido del Prof. Justo Pastor Bejar entre muchos otros grandes Profesionales.</p>
                                <h4><strong>PRESENTACIÓN</strong></h4>
                                <p align="justify"><strong>&nbsp;</strong>La Unidad de Gestión Educativa Local de  Coronel Portillo Nº 303, conforme lo dispone la Ley General De Educación, es el  Órgano especializado de la Dirección Regional de Educación de Ucayali,  responsable del Servicio educativo en el ámbito de su jurisdicción territorial,  con la finalidad de Promover e impulsar la educación, la cultura, el deporte,  la recreación, la ciencia y la tecnología en concordancia con la política de  gobierno sectorial establecida. Dentro del contexto organizacional es  imprescindible el manejo de una serie de Documentos de gestión y técnico  normativos, que para este caso será el <strong>Manual  de Organización y Funciones - MOF </strong>que describe las funciones específicas de  los cargos que lo conforman, determinan los niveles de coordinación con los  diferentes órganos de la Unidad de Gestión Educativa Local de Coronel Portillo,  precisa las interrelaciones Jerárquicas y funcionales con las dependencias a su  cargo y proporciona información a los funcionarios y servidores públicos sobre  sus funciones específicas en el marco de la estructura orgánica de la Unidad de  Gestión Educativa Local de Coronel portillo&nbsp;  , El presente documento de gestión, fue elaborado teniendo en cuenta los  Lineamientos generales alcanzados por el Ministerio de Educación, y el aporte  de los Trabajadores de esta unidad de Gestión Educativa Local de Coronel  Portillo.</p>
                                <p align="justify">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection