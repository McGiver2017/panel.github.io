<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UGEL DE CORONEL PORTILLO</title>
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Styles <link href="{{ asset('paper-kit2/css/bootstrap.min.css') }}" rel="stylesheet"/> <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('paper-kit2/css/nucleo-icons.css') }}" rel="stylesheet">-->
    <link href="{{ asset('paper-kit2/css/appPaperKit2.css') }}" rel="stylesheet">
    
    <link href="{{ asset('paper-kit2/assets/css/paper-kit.css?v=2.1.0') }}" rel="stylesheet"/>
    <link href="{{ asset('paper-kit2/assets/css/demo.css') }}" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('paper-kit2/assets/css/nucleo-icons.css') }}" rel="stylesheet">
    
</head>
<body>
    <header>
        <div class="row mt-2 mb-2">
            <div class="col-md-6 text-center">
                <span><strong>

                        <script language="JavaScript" type="text/javascript">
<!--
// last modified script by Bernhard Friedrich; should work in all browsers
var a;
a=new Date(document.lastModified);
lm_year=a.getYear();
if (lm_year<1000){                  //just in case date is delivered with 4 digits
    if (lm_year<70){
        lm_year=2000+lm_year;
    }
    else lm_year=1900+lm_year;
}                                 //end workaround
lm_month=a.getMonth()+1;
if (lm_month<10){
    lm_month='0'+lm_month;
}
lm_day=a.getDate();
if (lm_day<10){
    lm_day='0'+lm_day;
}
document.write("Ultima actualización " + lm_day+'/'+lm_month+'/'+lm_year);
// -->
</script>
                    </strong>Copyright Ugel - Coronel Portillo 2018 - Oficina de Sistemas</span>
            </div>
            <div class="col-md-6 text-center">
                <span><strong>&quot;AÑO DEL DIÁLOGO Y LA RECONCILIACIÓN NACIONAL&quot; -</strong>
                 <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var f=new Date();
                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
                </span>
            </div>
        </div>
        <div class="d-flex">
            <img src="{{ asset('ugel/img/logo2018.png')}}" class="img-fluid d-flex m-auto" />
        </div>
        <nav class="navbar navbar-expand-md bg-danger ">
            <div class="container">
                <a class="navbar-brand" href="/">UGEL DE CORONEL PORTILLO</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li role="presentation" class="nav-item active"><a href="{{ url('/') }}" class="btn btn-round">Inicio</a></li>
                    
                        <li class="nav-item dropdown">
                            <button href="#paper-kit" class="dropdown-toggle btn btn-round" data-toggle="dropdown" aria-expanded="false">DATOS <b class="caret"></b></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Lista de opciones</div>
                                <a class="dropdown-item" href="{{ url('/ugelcp') }}">UGEL CP</a>
                                <a class="dropdown-item" href="{{ url('/entidad') }}">Entidad</a>
                                <a class="dropdown-item" href="{{ url('/funcionarios') }}">Funcionarios</a>
                            </ul>
                        </li>                        
                        <li class="nav-item dropdown">
                            <button href="#paper-kit" class="dropdown-toggle btn btn-round" data-toggle="dropdown" aria-expanded="false">OFICINAS <b class="caret"></b></button>
                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Lista de opciones</div>
                                <a class="dropdown-item" href="{{ url('/direccion') }}">Dirección</a>
                                <a class="dropdown-item" href="{{ url('/agp') }}">Gestión Pedagogica</a>
                                <a class="dropdown-item" href="{{ url('/agi') }}">Gestión Institucional</a>
                                <a class="dropdown-item" href="{{ url('/administracion') }}">Administración</a>
                                <a class="dropdown-item" href="{{ url('/abastecimimento') }}">Abastecimiento</a>
                                <a class="dropdown-item" href="{{ url('/bienestar') }}">Bienestar Social</a>
                                <a class="dropdown-item" href="{{ url('/contabilidad') }}">Contabilidad</a>
                                <a class="dropdown-item" href="{{ url('/personal') }}">Personal</a>
                                <a class="dropdown-item" href="{{ url('/escalafon') }}">Escalafón</a>
                                <a class="dropdown-item" href="{{ url('/infraestructura') }}">Infraestructura</a>
                                <a class="dropdown-item" href="{{ url('/remuneraciones') }}">Remuneraciones</a>
                                <a class="dropdown-item" href="{{ url('/tesoreria') }}">Tesoreria</a>
                                <a class="dropdown-item" href="{{ url('/oci') }}">Oficina de Control Interno</a>
                                
                            </ul>
                        </li>
                        <li role="presentation" class="nav-item"><a href="{{ url('/transparencia') }}" class="btn btn-round">Transparencia</a></li>
                        <li role="presentation" class="nav-item"><a href="{{ url('/convocatorias') }}" class="btn btn-round">Convocatorias</a></li>
                        <li role="presentation" class="nav-item"><a href="{{ url('/reclamos') }}" class="btn btn-round">Reclamos</a></li>
                        <li role="presentation" class="nav-item">
                            <!-- Inicio Reloj -->
                            <button href="http://time.is/Pucallpa" id="time_is_link" rel="nofollow" style="font-size:12px" class="btn btn-round" disabled><span id="Pucallpa_z14d" ></span></button>

                            <script src="http://widget.time.is/t.js"></script>
                            <script>
                                time_is_widget.init({Pucallpa_z14d:{time_format:"12hours:minutes:secondsAMPM"}});
                            </script><!-- Fin Reloj -->
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
    <div class="container bordes">        
        @yield('content')
    </div>
    <footer class="footer footer-black footer-big">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center col-sm-3 col-12 ml-auto mr-auto">
                    <h4>UGEL DE CORONEL PORTILLO</h4>
                    <div class="social-area">
                        <a class="btn btn-just-icon btn-round btn-facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-just-icon btn-round btn-twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-just-icon btn-round btn-google">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-12 ml-auto mr-auto">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="{{ url('/') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/direccion') }}">
                                            Dirección
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/ugelcp') }}">
                                            Datos de UGEL
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/entidad') }}">
                                            Entidad
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/convocatorias') }}">
                                            Convocatoria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/transparencia') }}">
                                            Transparencia
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                    <span>Telefono Dirección :061-592017</span>
                                    </li>
                                    <li>
                                    <span>Email: ugeldecoronelportillo@gmail.com </span>
                                    </li>
                                    <li>
                                        <span>Dirección: Av. Las Mercedes S/N A.H Las Flores</span>
                                    </li>
                                    <li>
                                        <span>RUC: 20393274655</span>
                                    </li>
                                    <li>
                                        <span>
                                        Atención al Público 
                                        Atención de : 8:00 - 1:00 y 15:00 - 16:45
                                        Lunes a Viernes
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="stacked-links">
                                    <li>
                                        <h4>13.723<br> <small>accounts</small></h4>
                                    </li>
                                    <li>
                                        <h4>55.234<br> <small>downloads</small></h4>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="copyright">
                        <div class="pull-left">
                            © <script>document.write(new Date().getFullYear())</script>2018 Creative Tim, made with love
                        </div>
                        <div class="links pull-right">
                            <ul>
                                <li>
                                    <a href="#paper-kit">
                                        Company Policy
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Terms
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
<script src="{{ asset('paper-kit2/js/appPaperKit2.js') }}"></script>

@yield('script')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a9e31bfcfa3a1e5"></script>
<script>
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
</script>
</body>
</html>
