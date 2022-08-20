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
    <link href="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/nvd3/build/nv.d3.css') }}" rel="stylesheet">
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
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-th-large"></i>
                            <span>Post</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('create-post') }}">Create post</a></li>
                            <li class="active"><a href="{{ ('dashboard') }}">All Posts</a></li>
                        </ul>
                    </li>

                    <li class="has-sub active">
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

                    <li class="has-sub active">
                        <a href="{{ route('settings') }}">
                            <i class="fa fa-cogs"></i>
                            <span>settings</span>
                        </a>

                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                                class="fa fa-angle-double-left"></i></a></li>
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
        <!-- begin theme-panel -->
        <div class="theme-panel theme-panel-lg">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-red" data-theme="red"
                            data-theme-file="../assets/css/default/theme/red.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Red">&nbsp;</a>
                    </li>
                    <li><a href="javascript:;" class="bg-pink" data-theme="pink"
                            data-theme-file="../assets/css/default/theme/pink.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Pink">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange"
                            data-theme-file="../assets/css/default/theme/orange.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-yellow" data-theme="yellow"
                            data-theme-file="../assets/css/default/theme/yellow.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Yellow">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-theme="lime"
                            data-theme-file="../assets/css/default/theme/lime.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="green"
                            data-theme-file="../assets/css/default/theme/green.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Green">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-teal" data-theme="default"
                            data-theme-file="../assets/css/default/theme/default.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-aqua" data-theme="aqua"
                            data-theme-file="../assets/css/default/theme/aqua.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Aqua">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue"
                            data-theme-file="../assets/css/default/theme/blue.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple"
                            data-theme-file="../assets/css/default/theme/purple.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-indigo" data-theme="indigo"
                            data-theme-file="../assets/css/default/theme/indigo.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Indigo">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black"
                            data-theme-file="../assets/css/default/theme/black.css" data-click="theme-selector"
                            data-toggle="tooltip" data-trigger="hover" data-container="body"
                            data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
                    <div class="col-md-6">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header</div>
                    <div class="col-md-6">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
                    <div class="col-md-6">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
                    <div class="col-md-6">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
                    <div class="col-md-6">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Content Styling</div>
                    <div class="col-md-6">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
                    <div class="col-md-6">
                        <select name="direction" class="form-control form-control-sm">
                            <option value="1">LTR</option>
                            <option value="2">RTL</option>
                        </select>
                    </div>
                </div>
                <div class="divider"></div>
                <h5>THEME VERSION</h5>
                <div class="theme-version">
                    <a href="index_v2.html" class="active">
                        <span style="background-image: url(../assets/img/theme/default.jpg);"></span>
                    </a>
                    <a href="../transparent/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
                    </a>
                </div>
                <div class="theme-version">
                    <a href="../apple/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
                    </a>
                    <a href="../material/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/material.jpg);"></span>
                    </a>
                </div>
                <div class="theme-version">
                    <a href="../facebook/index_v2.html">
                        <span style="background-image: url(../assets/img/theme/facebook.jpg);"></span>
                    </a>
                </div>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-rounded"
                            data-click="reset-local-storage"><b>Reset Local Storage</b></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
            data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
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
    <script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
    <script src="{{ asset('assets/js/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nvd3/build/nv.d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('assets/js/demo/dashboard-v2.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
        });
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
    </script>
    @livewireScripts
</body>

</html>
