<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ config('app.locale') }}" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ config('app.locale') }}">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="{{asset('/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
        <link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{asset('/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{asset('/assets/css/animate.min.css') }}" rel="stylesheet" />
        <!--<link href="{{ asset('/assets/css/style.min.css') }}" rel="stylesheet" />-->
        <link href="{{asset('/assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{asset('/assets/css/style-responsive.min.css') }}" rel="stylesheet" />
        <link href="{{asset('/assets/css/theme/default.css') }}" rel="stylesheet" id="theme" />
        <link href="{{asset('/assets/plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" />

        <link href="{{asset('/assets/css/jquery.circliful.css') }}" rel="stylesheet" />
       
        
        
        <script src="{{ asset('/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('/js/brazil.js') }}"></script>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	
        
        
        
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        <link href="{{ asset('/assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL STYLE ================== -->

        @yield('styles')

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ asset('/assets/plugins/pace/pace.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/jQuery/Chart.js') }}"></script>
        <script src="{{ asset('/assets/plugins/jQuery/Chart.min.js') }}"></script>   




        <!-- ================== END BASE JS ================== -->
    </head>

    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-sidebar-minified white">
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <a href="{{ url('/') }}" class="navbar-bran">
                       <img src="{{ asset('logo_RDMP.png') }}"></script>                         
                    </a>
                    <div class="navbar-header" >

                        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->

                    <!-- begin header navigation right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown navbar-user">
                            @if (Auth::guest())
                            <a href="{{ route('login') }}" class="" data-toggle="">
                                <span class="">Login</span>
                            </a>
                            @else
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('/assets/img/avatar.gif') }}" alt="" /> 
                                <span class="hidden-xs">{{ Auth::user()->name }}</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight">
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                            @endif
                        </li>
                    </ul>
                    <!-- end header navigation right -->
                </div>
                <!-- end container-fluid -->
            </div>

            <?php /* SIDEBAR */ ?>
            @include('layouts.sidebar')
            <?php /* SIDEBAR */ ?>