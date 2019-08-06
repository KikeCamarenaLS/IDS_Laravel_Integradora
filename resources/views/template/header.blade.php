<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UltraGym | UTTEC</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{url('/assets')}}/img/favicon.ico" type="image/x-icon"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts and icons -->
    <script src="{{url('/assets')}}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:100,200,300,400,500,600,700,800,900"]},
            custom: {"families":["Flaticon", "LineAwesome"], urls: ['{{url('/assets')}}/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/assets')}}/css/ready.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{url('/assets')}}/css/demo.css">
</head>
<body>
    <div class="wrapper">
        <div class="main-header" >
            <!-- Logo Header -->
            <div class="logo-header">
                <!--
                    Tip 1: You can change the background color of the logo header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                -->
                <a href="{{url('/home')}}" class="big-logo">
                    <img src="{{url('/assets')}}/img/ids.png" alt="logo img" class="logo-img">
                </a>
                <a href="{{url('/home')}}" class="logo">
                    <img src="{{url('/assets')}}/img/textoids.png" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="la la-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="black">
                <!--
                    Tip 1: You can change the background color of the navbar header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                -->
                <div class="container-fluid" >
                    <div class="navbar-minimize">
                        <button class="btn btn-minimize btn-rounded">
                            <i class="la la-navicon"></i>
                        </button>
                    </div>
                    <!--<div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search ml-md-3 mr-md-3">
                            <div class="input-group">
                                <input type="text" placeholder="Search ..." class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-search">
                                        <i class="la la-search search-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>-->
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                       <!-- <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="flaticon-search-1"></i>
                            </a>
                        </li>-->


                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{url('/assets')}}/img/muscle.png" alt="image profile" width="36" class="img-circle"></a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="{{url('/assets')}}/img/muscle.png" alt="image profile"></div>
                                        <div class="u-text">
                                            <h4> {{ Auth::user()->name }} </h4>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                            <a href="{{url('/miperfil')}}" class="btn btn-rounded btn-danger btn-sm">Mi perfil</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!--<div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    Salir
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!--
                Tip 1: You can change the background color of the sidebar using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
                Tip 2: you can also add an image using data-image attribute
            -->
            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="photo">
                            <img src="{{url('/assets')}}/img/muscle.png" alt="image profile">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                     {{ Auth::user()->name }}
                                    <span class="user-level">{{ Auth::user()->email }}</span>
                                    <!--<span class="caret"></span>-->
                                </span>
                            </a>
                            <div class="clearfix"></div>


                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="{{url('/home')}}">
                                <i class="flaticon-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="la la-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Opciones</h4>
                        </li>

                        @can('UsuariosSistema')
                            <li class="nav-item ">
                                <a data-toggle="collapse" href="#usuario_collapse">
                                    <i class="flaticon-users"></i>
                                    <p>Usuarios sistema</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="usuario_collapse">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="{{url('/Roles')}}">
                                                <span class="sub-item">Roles</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/listado_usuario')}}">
                                                <span class="sub-item">Permisos</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        @endcan




                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#personal_collapse">
                                <i class="flaticon-users"></i>
                                <p>Personal</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="personal_collapse">
                                <ul class="nav nav-collapse">
                                    @can('RegistroPersonal')
                                        <li>
                                            <a href="{{url('/nuevo_personal')}}">
                                                <span class="sub-item">Nuevo</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('ModificarPersonal')
                                        <li>
                                            <a href="{{url('/listado_personal')}}">
                                                <span class="sub-item">Listado</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('VerPersonal')
                                        <li>
                                            <a href="{{url('/listado_personal')}}">
                                                <span class="sub-item">Ver</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @hasrole('Cliente')
                                        <li>
                                            <a href="{{url('/listado_personal')}}">
                                                <span class="sub-item">Ver</span>
                                            </a>
                                        </li>
                                    @endhasrole

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Paquetes_collapse">
                                <i class="flaticon-present"></i>
                                <p>Paquetes</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Paquetes_collapse">
                                <ul class="nav nav-collapse">

                                    @can('GestionarPaquetes')
                                        <li>
                                            <a href="{{url('/home/nuevo_paquete')}}">
                                                <span class="sub-item">Nuevo Paquete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/listado_paquete')}}">
                                                <span class="sub-item">Listado</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('VerPaquetes')
                                        <li>
                                            <a href="{{url('/listado_paquete')}}">
                                                <span class="sub-item">Ver Paquetes</span>
                                            </a>
                                        </li>
                                    @endcan


                                </ul>
                            </div>
                        </li>


                        @can('GestionarClientes')
                            <li class="nav-item ">
                                <a data-toggle="collapse" href="#cliente_collapse">
                                    <i class="la la-user-plus"></i>
                                    <p>Clientes</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="cliente_collapse">
                                    <ul class="nav nav-collapse">

                                        <li>
                                            <a href="{{url('/nuevo_cliente')}}">


                                                <span class="sub-item">Nuevo</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Consultar_Cliente')}}">
                                                <span class="sub-item">Consultar</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Editar_Cliente')}}">
                                                <span class="sub-item">Editar</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Eliminar_Cliente')}}">
                                            <span class="sub-item">Eliminar</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        @endcan


                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Tienda_collapse">
                                <i class="la la-shopping-cart"></i>
                                <p>Tienda</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Tienda_collapse">
                                <ul class="nav nav-collapse">

                                    @can('GestionarTienda')
                                        <li>
                                            <a href="{{url('/ver_Tienda')}}">
                                                <span class="sub-item">Subir Producto</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/ver_Tienda')}}">
                                                <span class="sub-item">Ver</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Editar_Tienda')}}">
                                                <span class="sub-item">Editar</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('Comprar')
                                        <li>
                                            <a href="{{url('/ver_Tienda')}}">
                                                <span class="sub-item">Comprar</span>
                                            </a>
                                        </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>

                         <li class="nav-item ">
                            <a data-toggle="collapse" href="#Avances_collapse">
                                <i class="la la-spinner"></i>
                                <p>Avances</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Avances_collapse">
                                <ul class="nav nav-collapse">

                                    @can('GestionarAvances')
                                        <li>
                                            <a href="{{url('/ver_Avances')}}">
                                                <span class="sub-item">Registro de avances</span>
                                            </a>
                                        </li>

                                         <li>
                                            <a href="{{url('/Editar_Avances')}}">
                                                <span class="sub-item">Editar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/Editar_Avances')}}">
                                                <span class="sub-item">Consultar</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('ConsultarAvances')
                                        <li>
                                            <a href="{{url('/ver_Avances')}}">
                                                <span class="sub-item">Ver mis avances</span>
                                            </a>
                                        </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Dietas_collapse">
                                <i class="la la-thumbs-up"></i>
                                <p>Dietas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Dietas_collapse">
                                <ul class="nav nav-collapse">
                                    @can('GestionarDietas')
                                        <li>
                                            <a href="{{url('/ver_Dietas')}}">
                                                <span class="sub-item">Crear Dietas</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/ver_Dietas')}}">
                                                <span class="sub-item">Ver</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Editar_Dietas')}}">
                                                <span class="sub-item">Gestionar</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('ConsultarDieta')
                                        <li>
                                            <a href="{{url('/Editar_Dietas')}}">
                                                <span class="sub-item">Ver mis dietas</span>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Salud_collapse">
                                <i class="la la-gittip"></i>
                                <p>Salud</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="Salud_collapse">
                                <ul class="nav nav-collapse">
                                    @can('GestionarDietas')
                                        <li>
                                            <a href="{{url('/ver_Dietas')}}">
                                                <span class="sub-item">Registrar control salud</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/ver_Dietas')}}">
                                                <span class="sub-item">Ver mi control de salud</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Editar_Dietas')}}">
                                                <span class="sub-item">Historial salud</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('ConsultarDieta')
                                        <li>
                                            <a href="{{url('/Editar_Dietas')}}">
                                                <span class="sub-item">Ver mis dietas</span>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#Rutinas_collapse">
                                <i class="la la-street-view"></i>
                                <p>Rutinas</p>
                                <span class="caret"></span>
                            </a>

                            <div class="collapse" id="Rutinas_collapse">
                                <ul class="nav nav-collapse">
                                    @can('GestionarRutinas')
                                        <li>
                                            <a href="{{url('/ver_Rutinas')}}">
                                                <span class="sub-item">Crear ejercicio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/ver_Rutinas')}}">
                                                <span class="sub-item">Crear rutina</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/ver_Rutinas')}}">
                                                <span class="sub-item">Ver</span>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="{{url('/Editar_Rutinas')}}">
                                                <span class="sub-item">Editar</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('ConsultarRutina')
                                        <li>
                                            <a href="{{url('/ver_Rutinas')}}">
                                                <span class="sub-item">Ver mi rutina</span>
                                            </a>
                                        </li>
                                    @endcan

                                </ul>
                            </div>

                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-header">

                         @yield('content_header')
                    </div>



                     @yield('content')






                </div>
            </div>

        </div>

    </div>
     <!--   Core JS Files   -->
    <script src="{{url('/assets')}}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{url('/assets')}}/js/core/popper.min.js"></script>
    <script src="{{url('/assets')}}/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{url('/assets')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{url('/assets')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{url('/assets')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="{{url('/assets')}}/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="{{url('/assets')}}/js/plugin/chart.js/chart.min.js"></script>

    <!-- Chart Circle -->
    <script src="{{url('/assets')}}/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="{{url('/assets')}}/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{url('/assets')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('/assets')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="{{url('/assets')}}/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="{{url('/assets')}}/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="{{url('/assets')}}/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="{{url('/assets')}}/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="{{url('/assets')}}/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="{{url('/assets')}}/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="{{url('/assets')}}/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="{{url('/assets')}}/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="{{url('/assets')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Ready Pro JS -->
    <script src="{{url('/assets')}}/js/ready.min.js"></script>


     @yield('jscustom')

</body>
</html>