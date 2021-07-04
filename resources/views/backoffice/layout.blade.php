<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inovatis Backoffice | @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('backoffice/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backoffice/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('backoffice/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backoffice/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('backoffice/css/skins/_all-skins.min.css')}}">
@yield('css')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{route('backoffice.index')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>I</b>BO</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Inovatis</b>Backoffice</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('backoffice/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('backoffice/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                                <p>
                                    {{Auth::user()->name}}
                                    <small>Member since {{ date('M, Y', strtotime(Auth::user()->created_at)) }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="btn btn-default btn-block">Deconnexion</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('backoffice/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <span><i class="fa fa-circle text-success"></i> En Ligne</span>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <li @yield('dashactive') >
                    <a href="{{route('backoffice.index')}}">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview @yield('contactsopen') ">
                    <a href="#">
                        <i class="fa fa-sticky-note"></i> <span>Contacts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" @yield('displaycontacts') >
                        <li @yield('listecontactsactive') >
                            <a href="{{route('backoffice.contact.index')}}">
                                <i class="fa fa-circle-o"></i> Liste des contacts
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview @yield('demandesopen') ">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Demandes d'inscription</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" @yield('displaydemandes')>
                        <li @yield('listedemandesactive') >
                            <a href="{{route('backoffice.demande.index')}}">
                                <i class="fa fa-circle-o"></i> Liste des demandes
                                @if($demandesCount > 0)
                                    <span class="pull-right-container">
                                    <span class="label label-primary pull-right">{{$demandesCount}}</span>
                                </span>
                                @endif
                            </a>
                        </li>
                        <li @yield('ajoutdemandesactive') >
                            <a href="{{route('backoffice.demande.ajout')}}">
                                <i class="fa fa-circle-o"></i> Ajouter une demande
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview @yield('sessionsopen') ">
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        <span>Sessions</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" @yield('displaysessions')>
                        <li @yield('listesessionsactive') >
                            <a href="{{route('backoffice.session.index')}}">
                                <i class="fa fa-circle-o"></i> Liste des sessions
                            </a>
                        </li>
                        <li @yield('ajoutsessionsactive') >
                            <a href="{{route('backoffice.session.ajout')}}">
                                <i class="fa fa-circle-o"></i> Ajouter une session
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview @yield('formationsopen') ">
                    <a href="#">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Formations</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" @yield('displayformations')>
                        <li @yield('listeformationsactive') >
                            <a href="{{route('backoffice.formation.index')}}">
                                <i class="fa fa-circle-o"></i> Liste des formations
                            </a>
                        </li>
                        <li @yield('ajoutformationsactive') >
                            <a href="{{route('backoffice.formation.ajout')}}">
                                <i class="fa fa-circle-o"></i> Ajouter une formation
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('headtitle')
            </h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @yield('modals')
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2020 <a href="{{route('backoffice.index')}}">Inovatis Backoffice</a>.</strong> All rights
        reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('backoffice/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backoffice/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('backoffice/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('backoffice/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backoffice/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backoffice/js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
@yield('js')
</body>
</html>
