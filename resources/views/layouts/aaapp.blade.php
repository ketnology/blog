<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Gmag - Blog News Magazine Template</title>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
</head>

<body>
    <!-- main start  -->
    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        <!-- progress-bar end -->
        <!-- header -->
        <header class="main-header">
            <!-- top bar -->
            <div class="top-bar fl-wrap">
                <div class="container">
                    <div class="date-holder">
                        <span class="date_num"></span>
                        <span class="date_mounth"></span>
                        <span class="date_year"></span>
                    </div>
                    <div class="header_news-ticker-wrap">
                        <div class="hnt_title">Hot News :</div>
                        <div class="header_news-ticker fl-wrap">
                            <ul>
                                <li><a href="post-single.html">They chose to leave rather than put up with a governor
                                        who follows science .</a></li>
                                <li><a href="post-single.html">Hold On to Your Travel Dreams in the World.</a></li>
                                <li><a href="post-single.html">White endorses bill that would ensure abortion
                                        access.</a></li>
                                <li><a href="post-single.html">NFL Power Rankings 2021: How all 32 teams stack up after
                                        Week 2.</a></li>
                            </ul>
                        </div>
                        <div class="n_contr-wrap">
                            <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                            <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </div>
                    <ul class="topbar-social">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- top bar end -->
            <div class="header-inner fl-wrap">
                <div class="container">
                    <!-- logo holder  -->
                    <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
                    <!-- logo holder end -->
                    {{-- <!-- header-search-wrap -->
                    <div class="header-search-wrap novis_sarch">
                        <div class="widget-inner">
                            <form action="#">
                                <input name="se" id="se" type="text" class="search" placeholder="Search..." value="">
                                <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i>
                                </button>
                            </form>
                        </div>
                    </div> --}}
                    <!-- header-search-wrap end -->
                    <!-- header-cart_wrap  -->
                    <div class="header-cart_wrap novis_cart">
                        <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
                        <div class="header-cart_wrap_container fl-wrap">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ol>
                                        <li class="clearfix">
                                            <a href="#" class="widget-posts-img"><img src="images/shop/1.jpg"
                                                    class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Awesome Merch Wallet</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845
                                                </div>
                                            </div>
                                            <div class="clear-cart_button"><i class="far fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#" class="widget-posts-img"><img src="images/shop/2.jpg"
                                                    class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Gmag Merch Wallet</a>
                                                <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222
                                                </div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="header-cart_wrap_total fl-wrap">
                            <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                        </div>
                        <div class="header-cart_wrap_footer fl-wrap">
                            <a href="cart.html"> View Cart</a>
                            <a href="checkout.html"> Checkout</a>
                        </div>
                    </div>
                    <!-- header-cart_wrap end  -->
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <!-- navigation  end -->
                </div>
            </div>
        </header>
        <!-- header end  -->
      @yield('content')
            <!-- footer -->
            <footer class="fl-wrap main-footer">
                {{-- <div class="footer-bottom fl-wrap"> --}}
                    <div class="container">
                        <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
                        <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                        <div class="subfooter-nav">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
            {{-- <div class="aside-panel">
                <ul>
                    <li> <a href="#"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                    <li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>
                    <li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                    <li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                    <li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>
                </ul>
            </div>
        </div> --}}
        <!-- wrapper end -->
        <!-- cookie-info-bar end -->
        <!--register form -->
        <div class="main-register-container">
            <div class="reg-overlay close-reg-form"></div>
            <div class="main-register-holder">
                <div class="main-register-wrap fl-wrap">
                    <div class="main-register_bg">
                        <div class="bg-wrap">
                            <div class="bg par-elem " data-bg="images/bg/1.jpg"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                    </div>
                    <div class="main-register tabs-act fl-wrap">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text" onclick="this.select()" value="">
                                            <label>Password <span>*</span> </label>
                                            <input name="password" type="password" onclick="this.select()" value="">
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check" checked="">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                            <div class="lost_password">
                                                <a href="#">Lost Your Password?</a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" class="log-submit-btn color-bg"><span>Log
                                                    In</span></button>
                                        </form>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form"
                                                id="main-register-form2">
                                                <label>Full Name <span>*</span> </label>
                                                <input name="name" type="text" onclick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text" onclick="this.select()" value="">
                                                <label>Password <span>*</span></label>
                                                <input name="password" type="password" onclick="this.select()" value="">
                                                <button type="submit"
                                                    class="log-submit-btn color-bg"><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log  fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>