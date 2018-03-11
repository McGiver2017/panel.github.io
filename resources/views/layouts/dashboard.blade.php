<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="App" class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{ asset('img/sidebar-5.jpg') }}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" class="simple-text logo-mini">
                        SC
                    </a>
                    <a href="/" class="simple-text logo-normal">
                        Sist. de Control
                    </a>
                </div>
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('ugel/img/logo/user.png') }}" />
                    </div>
                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>{{ substr(Auth::user()->name,0,10) }}
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('logout') }}" class="profile-dropdown"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="sidebar-mini">L</span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @php                
                $usuarios = [
                        'ruta' => '/usuario',
                        'label' => 'Usuarios',
                        'id' => 'usuarios',
                        'icono' => 'nc-icon nc-chart-pie-35',
                        'submenu' => [
                            [
                                'label' => 'Registrar',
                                'shor' => 'R',
                                'ruta' => '/usuarios/create'
                            ],
                            [
                                'label' => 'Mostrar',
                                'shor' => 'M',
                                'ruta' => '/usuarios'
                            ]   
                        ]
                        
                    ];
                    $comunicados = [
                        'ruta' => '/comunicados',
                        'label' => 'Comunicados',
                        'id' => 'comunicados',
                        'icono' => 'nc-icon nc-chart-pie-35',
                        'submenu' => [
                            [
                                'label' => 'Crear',
                                'shor' => 'R',
                                'ruta' => '/comunicados/create'
                            ],
                            [
                                'label' => 'Mostrar',
                                'shor' => 'M',
                                'ruta' => '/comunicados'
                            ]   
                        ]
                        
                    ];
                    $notas = [
                        'ruta' => '/notas-de-prensa',
                        'label' => 'Notas de prensa',
                        'id' => 'notasprensa',
                        'icono' => 'nc-icon nc-chart-pie-35',
                        'submenu' => [
                            [
                                'label' => 'Crear',
                                'shor' => 'R',
                                'ruta' => '/notas-de-prensa/create'
                            ],
                            [
                                'label' => 'Mostrar',
                                'shor' => 'M',
                                'ruta' => '/notas-de-prensa'
                            ]   
                        ]
                        
                    ];
                    $quejas_relamos = [
                        'ruta' => '/mensajes',
                        'label' => 'Mensajes',
                        'id' => 'quejas-reclamos',
                        'icono' => 'nc-icon nc-chart-pie-35',
                        'submenu' => [
                            [
                                'label' => 'Mostrar',
                                'shor' => 'M',
                                'ruta' => '/mensajes'
                            ]
                        ]

                    ];
                $rutas = [$usuarios,$notas,$comunicados,$quejas_relamos
                    ];
                @endphp
                

                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @foreach ($rutas as $ruta)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="{{'#'.$ruta['id']}}">
                            <i class="{{$ruta['icono']}}"></i>
                            <p>
                            {{$ruta['label']}}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="{{$ruta['id']}}">
                            @foreach($ruta['submenu'] as $submenu)  
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url($submenu['ruta'])}}">
                                        <span class="sidebar-mini">{{$submenu['shor']}}</span>
                                        <span class="sidebar-normal">{{$submenu['label']}}</span>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Panel de Control</a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav mr-auto">
                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Auth::guest())
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                   <i class="nc-icon nc-button-power"></i> Log out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    
                @yield('content') 
                <footer class="footer">
                    <div class="container">
                        <nav>
                            <ul class="footer-menu">
                                <li>
                                    <a href="{{ url('/home') }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/usuarios') }}">
                                        Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/notas-de-prensa') }}">
                                        Notas de prensa
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/comunicados') }}">
                                        Comunicado
                                    </a>
                                </li>
                            </ul>
                            <p class="copyright text-center">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                               Derechos Reservados
                            </p>
                        </nav>
                    </div>
                </footer>
            </div>
        </div>
 <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('img/sidebar-5.jpg') }}" alt="" />
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
@yield('script')
</body>
</html>
