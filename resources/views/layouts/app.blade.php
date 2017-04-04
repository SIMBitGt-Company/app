<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transparent.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('scripts')

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/LogoS.png') }}" alt="LOGO" style="max-width:50px;">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="/" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-home"></i>
                </a>
            </li>
            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!--li><a href="{{ route('register') }}">Register</a></li-->
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                 </li>
                </ul>
            </li>
             @endif
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        @if (!Auth::guest())
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-file-text-o"></i> ORDENES DE SERVICIOS<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a id="NewOrder"><i class="fa fa-plus"></i> Crear Nueva Orden</a></li>
                        <li><a id="SearchOrder"><i class="fa fa-search"></i> Buscar Orden</a></li>
                        <li><a id="HistoryOrder"><i class="fa fa-history"></i> Ver mi historial</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-user"></i>  CLIENTES <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a id="NewUser"><i class="fa fa-user-plus"></i> Registrar cliente</a></li>
                        <li><a id="SearchUser"><i class="fa fa-users"></i> Consultar datos</a></li>
                        <li><a id="OrderUser"><i class="fa fa-search"></i> Buscar Ordenes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-car"></i>  VEHICULOS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a id="NewCar"><i class="fa fa-plus"></i> Registrar vehiculo</a></li>
                        <li><a id="SearchCar"><i class="fa fa-search"></i> Consultar datos</a></li>
                        <li><a id="OrderCar"><i class="fa fa-search-plus"></i> Buscar Ordenes</a></li>
                        <li><a id="NewBrand"><i class="fa fa-plus"></i> Registrar Marca</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-tag"></i>  CATALOGO DE ACCESORIOS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-4" class="collapse">
                        <li><a id="NewAccesorie"><i class="fa fa-plus"></i> Registrar accesorio</a></li>
                        <li><a id="SearchAccesorie"><i class="fa fa-search"></i> Consultar accesorios</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-fw fa-tag"></i>  CATALOGO DE SERVICIOS <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-5" class="collapse">
                        <li><a id="NewService"><i class="fa fa-plus"></i> Crear Nuevo Catalogo</a></li>
                        <li><a id="SearchService"><i class="fa fa-search"></i> Consultar Catalogos</a></li>
                    </ul>
                </li>
                <li>
                    <a id="ShowMyOrders" data-toggle="collapse" ><i class="fa fa-fw fa-history"></i>  HISTORIAL</a>
                </li>
            </ul>
        </div>
         @endif
        <!-- /.navbar-collapse -->
    </nav>

    @yield('content')
</div>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}"></script-->
    @yield('jquery')

</body>
</html>
