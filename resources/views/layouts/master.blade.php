<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Color Admin | Dashboard v2</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/default/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/default/style-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/default/theme/default.css') }}" rel="stylesheet" id="theme">
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    @stack('styles')
    @yield('styles')
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    @livewireStyles
</head>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->

            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-th-large"></i>
                            <span>Post</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=""><a href="{{ ('dashboard') }}">All Posts</a></li>
                            <li><a href="{{route('create-post') }}">Create post</a></li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-align-left"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about-page') }}">About Page</a></li>
                            <li><a href="{{ route('faq-page') }}">Faq Page</a></li>
                            <li><a href="{{ route('policy-page') }}">Policy Page</a></li>
                            <li><a href="{{ route('contact-page') }}">Contact Page</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        </ul>
                    </li>

                    <li class="has-sub ">
                        <a href="{{ route('settings') }}">
                            <i class="fa fa-cogs"></i>
                            <span>settings</span>
                        </a>

                        <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <div id="content" class="content">

            @if (isset($slot))
            {{ $slot }}
            @else
            @yield('content')
            @endif
        </div>

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--[if lt IE 9]>
  <script src="{{ asset('assets/crossbrowserjs/html5shiv.js') }}"></script>
  <script src="{{ asset('assets/crossbrowserjs/respond.min.js') }}"></script>
  <script src="{{ asset('assets/crossbrowserjs/excanvas.min.js') }}"></script>
 <![endif]-->
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    @stack('scripts')
    <!-- ================== END PAGE LEVEL JS ================== -->

    @yield('scripts')

    <script>
        $(document).ready(function() {
            App.init();
        });

    </script>
    @livewireScripts
</body>

</html>
