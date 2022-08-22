<div>
    <header class="main-header">
        <div class="top-bar fl-wrap">
            <div class="container">
                <div class="date-holder">
                    <span class="date_num"></span>
                    <span class="date_mounth"></span>
                    <span class="date_year"></span>
                </div>
                <ul class="topbar-social">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="header-inner fl-wrap">
            <div class="container">
                <a href="index.html" class="logo-holder">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>

                <div class="srf_btn htact show-reg-form">
                    @if (Auth::check())
                    <i class="fal fa-user"></i>
                    @else
                    <i class="fal fa-sign-in"></i>
                    @endif
                </div>
                <div class="nav-button-wrap" style="margin-right: 25px;">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                {{-- <a href="{{ route('home') }}" class="act-link">Home</i></a> --}}
                                <a href="{{ route('home') }}" class="">Home</i></a>
                            <li>
                                <a href="{{ route('blog') }}">Blog</i></a>
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
                        <div class="overlay"></div>
                    </div>
                    <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                </div>
                <div class="main-register tabs-act fl-wrap" style="padding: 10px">
                    <div id="tabs-container">
                        <div class="soc-log  fl-wrap">
                            <p>{{ Auth::user()->name }}</p>
                            <a class="log-submit-btn color-bg post-category-marker" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
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
                                    <div class="alert alert-success mb-3 rounded-0" role="alert" style="background-color: greenyellow">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <label>Username or Email Addre<span>*</span> </label>

                                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required />
                                        <label>Password <span>*</span> </label>
                                        <x-jet-input class="{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
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

                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">

                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <x-jet-label value="{{ __('Name') }}" />
                                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                            <x-jet-input-error for="name"></x-jet-input-error>


                                            <x-jet-label value="{{ __('Email') }}" />
                                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required />
                                            <x-jet-input-error for="email"></x-jet-input-error>


                                            <x-jet-label value="{{ __('Password') }}" />

                                            <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" required autocomplete="new-password" />
                                            <x-jet-input-error for="password"></x-jet-input-error>

                                            <x-jet-label value="{{ __('Confirm Password') }}" />

                                            <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                            <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
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
