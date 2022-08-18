<div>
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
                <a href="index.html" class="logo-holder">
                    <img src="images/logo.png" alt="">
                </a>
                <!-- logo holder end -->
                <div class="search_btn htact show_search-btn">
                    <i class="far fa-search"></i>
                    <span class="header-tooltip">
                        Search
                    </span>
                </div>
                <div class="srf_btn htact show-reg-form">
                    @if (Auth::check())
                        <i class="fal fa-user"></i>
                    @else
                        <i class="fal fa-sign-in"></i>
                    @endif
                </div>
                <div class="show-cart sc_btn htact">
                    <i class="fal fa-shopping-bag"></i>
                    <span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span>
                </div>
                <!-- header-search-wrap -->
                <div class="header-search-wrap novis_sarch">
                    <div class="widget-inner">
                        <form action="#">
                            <input name="se" id="se" type="text" class="search" placeholder="Search..."
                                value="">
                            <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i>
                            </button>
                        </form>
                    </div>
                </div>
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
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="act-link">Home</i></a>
                                {{-- <!--second level -->
                                        <ul>
                                            <li><a href="index.html">Slider</a></li>
                                            <li><a href="index2.html">Carousel</a></li>
                                            <li><a href="index3.html">Grid</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li> --}}
                            <li>
                                <a href="{{ route('blog') }}">Blog</i></a>
                                {{-- <!--second level -->
                                        <ul>
                                            <li><a href="blog.html">List</a></li>
                                            <li><a href="blog2.html">2 Sidebars</a></li>
                                            <li><a href="blog3.html">Grid Sidebar</a></li>
                                            <li><a href="blog4.html">Full Width Sidebar </a></li>
                                            <li><a href="blog5.html">3 Columns Grid</a></li>
                                            <li>
                                                <a href="#">Single<i class="fas fa-caret-down"></i></a>
                                                <!--second level -->
                                                <ul>
                                                    <li><a href="post-single.html">Style 1</a></li>
                                                    <li><a href="post-single2.html">Style 2</a></li>
                                                </ul>
                                                <!--second level end-->
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li> --}}
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @if (Auth::check())
        <div class="main-register-container">
            <div class="reg-overlay close-reg-form"></div>
            <div class="main-register-holder">
                <div class="main-register-wrap fl-wrap">
                    <div class="main-register_bg">
                        <div class="bg-wrap">
                            {{-- <div class="bg par-elem " data-bg="images/bg/1.jpg"></div> --}}
                            <div class="overlay"></div>
                        </div>
                        <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                    </div>
                    <div class="main-register tabs-act fl-wrap" style="padding: 10px">
                        <div id="tabs-container">
                            <div class="soc-log  fl-wrap">
                                <p>{{ Auth::user()->name }}</p>
                                <a class="log-submit-btn color-bg post-category-marker" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Logout</a>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="main-register-container">
            <div class="reg-overlay close-reg-form"></div>
            <div class="main-register-holder">
                <div class="main-register-wrap fl-wrap">
                    <div class="main-register_bg">
                        <div class="bg-wrap">
                            <div class="overlay"></div>
                        </div>
                        <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                    </div>
                    <div class="main-register tabs-act fl-wrap">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <x-jet-validation-errors class="mb-3 rounded-0" style="color:red; " />

                                        @if (session('status'))
                                            <div class="alert alert-success mb-3 rounded-0" role="alert"
                                                style="background-color: greenyellow">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <label>Username or Email Addre<span>*</span> </label>

                                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                type="email" name="email" :value="old('email')" required />
                                            <label>Password <span>*</span> </label>
                                            <x-jet-input class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                type="password" name="password" required
                                                autocomplete="current-password" />
                                            <div class="filter-tags">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <label for="check-a">Remember me</label>
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

                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf


                                                <x-jet-label value="{{ __('Name') }}" />
                                                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                    type="text" name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" />
                                                <x-jet-input-error for="name"></x-jet-input-error>


                                                <x-jet-label value="{{ __('Email') }}" />
                                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    type="email" name="email" :value="old('email')" required />
                                                <x-jet-input-error for="email"></x-jet-input-error>


                                                <x-jet-label value="{{ __('Password') }}" />

                                                <x-jet-input
                                                    class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                    type="password" name="password" required
                                                    autocomplete="new-password" />
                                                <x-jet-input-error for="password"></x-jet-input-error>

                                                <x-jet-label value="{{ __('Confirm Password') }}" />

                                                <x-jet-input class="form-control" type="password"
                                                    name="password_confirmation" required
                                                    autocomplete="new-password" />
                                                <button type="submit"
                                                    class="log-submit-btn color-bg"><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
