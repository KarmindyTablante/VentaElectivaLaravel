<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema_Ventas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





    <style type="text/css">


#menu ul {
list-style:none;
margin:0;
padding:0;
}

#menu ul a {
display:block;
color:#fff;
text-decoration:none;
/*font-weight:400;
font-size:15px;
padding:10px;
font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform:uppercase;
  letter-spacing:1px;*/
}

#menu ul li {

margin:0;
padding:0;
}

#menu ul ul {
display:none;
top:100%;
left:0;
padding:0;
}

#menu ul ul li {
float:none;
width:150px
}

#menu ul ul a {
line-height:120%;
padding:10px 15px;
}

#menu ul li:hover > ul {
display:block;
}
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
               <!--  <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> -->

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">   

                    <a class="logout btn salir float-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>  
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item"> -->
                                <!-- Message Start -->
                              <!--   <div class="media">
                                    
                                    <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div> -->
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- <a href="#" class="dropdown-item"> -->
                                <!-- Message Start -->
                               <!--  <div class="media">

                                    <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div> -->
                                <!-- Message End -->
                          <!--   </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"> -->
                                <!-- Message Start -->
                               <!--  <div class="media">

                                    <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div> -->
                                <!-- Message End -->
                           <!--  </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div> -->
                    <!-- </li> -->
                    <!-- Notifications Dropdown Menu -->

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                        </li> -->
                <!-- </ul> -->
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="{{asset('dist/img/tuscomprashoy.png')}}" alt="TusComprasHoy Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">Sistema_Ventas</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        
                        <div class="image">
                                    
                                </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                @else
                               
                                {{Auth::user()->name }} {{Auth::user()->apellido }}

                                <!-- <a class="logout btn btn-primary float-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>   -->

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>



                         
                        
                            <li class="nav-item">
                                <a href="{{url('usuarios')}}"
                                    class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Usuarios
                                    </p>
                                </a>
                            </li>
                   

                         
                            <nav id="menu">
                                    <ul>
                                        <li class="nav-item">
                                            <a href="#" 
                                            class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cubes"></i>&nbsp;&nbsp;&nbsp;
                                                <p>
                                                    Almacen
                                                </p>
                                             </a>
                                              <ul>
                                                    <li><a href="{{url('articulos')}}"><i class="fa fa-tag"></i>Articulo</a></li>
                                                    <li><a href="{{url('categorias')}}"><i class="fa fa-tasks"></i>Categoria</a></li>
                                              </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                      <li class="nav-item">
                                         <a href="#" 
                                         class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="nav-icon fas fa-shopping-cart" ></i>&nbsp;&nbsp;&nbsp;
                                               <p>
                                                   Ventas
                                               </p>
                                            </a>
                                        <ul>
                                          <li><a href="{{url('ventas')}}"><i class="fa fa-dollar"></i>Ventas</a></li>
                                          <li><a href="{{url('personas')}}"><i class="fa fa-child"></i>Clientes</a></li>
                                        </ul>
                                      </li> 
                                    </ul>
                           </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>Todos los derechos reservados
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>


  <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
        "infoFiltered": "(Filtrado de _MAX_ total registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
        } );
    } );
  </script>

            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>

</body>

</html>