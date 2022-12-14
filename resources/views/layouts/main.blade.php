<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Glam - Blog News</title>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    @livewireStyles
</head>

<body>
    <!-- main start  -->
    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        <!-- progress-bar end -->

        @livewire('includes.navbar-component')

        @if (isset($slot))
            {{ $slot }}
        @else
            @yield('content')
        @endif

        <!-- footer -->
        <footer class="fl-wrap main-footer">
            <div class="container">
                <!-- footer-widget-wrap -->
                <div class="footer-widget-wrap fl-wrap">
                    <div class="row">
                        <!-- footer-widget -->
                        <div class="col-md-5">
                            <div class="footer-widget">
                                <div class="footer-widget-content">
                                    <a href="index.html" class="footer-logo"><img src="images/logo2.png"
                                            alt=""></a>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quos quaerat, magnam expedita voluptatum eligendi, soluta qui,
                                        sed culpa accusantium saepe distinctio ad ex amet? Velit et exercitationem error molestiae consequatur.
                                    </p>
                                    <div class="footer-social fl-wrap">
                                        <ul>
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#" target="_blank"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                        <!-- footer-widget -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <div class="footer-widget-title">Links</div>
                                <div class="footer-widget-content">
                                    <div class="footer-list footer-box fl-wrap">
                                        <ul>
                                            <li> <a href="#">Home</a></li>
                                            <li> <a href="#">About</a></li>
                                            <li> <a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="footer-widget-title">Subscribe</div>
                                <div class="footer-widget-content">
                                    <div class="subcribe-form fl-wrap">
                                        <p>We'll send you a notification by email.</p>
                                        <form id="subscribe" class="fl-wrap">
                                            <input class="enteremail" name="email" id="subscribe-email"
                                                placeholder="Your Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button"
                                                class="subscribe-button color-bg">Send </button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                <!-- footer-widget-wrap end-->
            </div>
            <div class="footer-bottom fl-wrap">
                <div class="container">
                    <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
                    <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                    {{-- <div class="subfooter-nav">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </footer>
    </div>
    <!-- wrapper end -->
    <!-- cookie-info-bar -->

    <!-- cookie-info-bar end -->
    <!--register form -->
    <!--register form end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @livewireScripts
</body>

</html>
