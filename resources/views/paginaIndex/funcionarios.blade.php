@extends('layouts.appclear')

@section('content')
<div>
    <div class="section text-center landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Funcionarios</h2>
                    <h5>En el ejercicio de sus funciones públicas, está vinculado al aparato estatal mediante un régimen de Derecho Publico. </h5>
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
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#directora" aria-expanded="false" aria-controls="collapseOne">
                                Directora de la Unidad de Gestión Educativa Local - Crnl.Portillo
                                <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="directora" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                            <p align="justify"> 
                            Planificar, organizar, dirigir,  ejecutar, supervisar y evaluar el servicio educativo conducir la elaboración,  ejecución y evaluación del Proyecto Educativo, Plan Anual de Trabajo y  Reglamento Interno, de manera participativa. <br>
                            <strong>Mag. Elvita Lucia Espinoza Silva</strong>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingTwo">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#jefe-area-gestion" aria-expanded="false" aria-controls="collapseTwo">
                                Jefa del Area de Gestión Pedagógica
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="jefe-area-gestion" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                            <p align="justify"> 
                            Es la encargada de supervisar las políticas educativas, así como  orientar y aplicar estrategias para mejorar la calidad de la educación de las  II.EE<br>
                            <strong>Mag.  Elena Katayama  Cruz</strong>
                            </p></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#jefe-gestion-institucional" aria-expanded="false" aria-controls="collapseThree">
                                Jefe del Area de Gestión Institucional
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="jefe-gestion-institucional" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            Orientar y supervisar la aplicación de la política y  normatividad educativa en lo que se refiere a Gestión Institucional, en las  Instituciones y Programas Educativos. <br>
                            <strong>CPC.  Daniel Ruiz Vargas </strong>
                            </p>
                        </div>
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#jefe-area-administracion" aria-expanded="false" aria-controls="collapseThree">
                                Jefa del Area de Administración-Infraestructura y Equipamiento
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="jefe-area-administracion" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            La Oficina General de Administración es el órgano de  administración interna encargado de administrar los recursos humanos,  financieros y materiales del Ministerio, de acuerdo a las normas vigentes.<strong> </strong><br>
                            <strong>CPC. Lily  Campos Rojas</strong> 
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#asesor-legal" aria-expanded="false" aria-controls="collapseThree">
                                Asesor Legal 
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="asesor-legal" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            &nbsp;La Dirección de Asesoría Legal es la  dependencia a la que corresponde aconsejar a la Universidad para que actúe  conforme a la Constitución, la Ley, el Estatuto y los Reglamentos. <br>
                            <strong>Abog.&nbsp;Carlos Edwin Solsol Acosta</strong>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-collapse" role="tab" id="headingThree">
                            <h5 class="mb-0 panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#jefe-oci" aria-expanded="false" aria-controls="collapseThree">
                                Jefa de la Oficina de Control Institucional (OCI)
                                    <i class="ti-angle-down"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="jefe-oci" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                            <p align="justify"> 
                            El jefe de OCI es designado y separado por la  Contraloría General, y asimismo, objeto de supervisión y evaluación en el  desempeño de sus funciones, conforme a este Reglamento y demás normativa  vigente, independientemente del vínculo laboral y/o contractual que tenga con  la contraloría General o con la entidad. <br>
                            <strong>Mag.  CPCC. Maria Dania Ochoa Rios</strong>
                            </p>
                        </div>
                        </div>
                    </div>
                </div><!--  end acordeon -->
                </div>

            </div>
            <div class="col-md-4">
                <h3 class="margin-bottom-10">Función Pública</h3>
                <p>La sociedad en su continua lucha por alcanzar la justicia se ha empeñado en desarrollar los conceptos democráticos de justicia, igualdad y libertad, dando muestras de su dignidad individual que la caracteriza por encima de todas las especies yendo a la par con el proceso evolutivo en todas sus formas.<br>
                </p>
            </div>        
        </div>
    </div>
</div>
@endsection