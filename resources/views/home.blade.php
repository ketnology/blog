<div>
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!-- hero-slider-wrap     -->
            <div class="hero-slider-wrap fl-wrap">
                <!-- hero-slider-container     -->
                <div class="hero-slider-container multi-slider fl-wrap full-height">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="images/all/20.jpg" data-swiper-parallax="40%"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="hero-item fl-wrap">
                                    <div class="container">
                                        <div class="clearfix"></div>
                                        <h2>
                                            <a href="post-single.html">
                                                Innovations that Bring Pleasure to All
                                                Peoples
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section>
                    <div class="container">
                        <div class="section-title sect_dec">
                            <h2>Best In Categories</h2>
                            <h4>Don't miss daily news</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                    <!--list-post-->
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker" href="#">Sports</a>
                                        <div class="list-post-media">
                                            <a href="post-single.html">
                                                <div class="bg-wrap">
                                                    <div class="bg" data-bg="images/all/15.jpg"></div>
                                                </div>
                                            </a>
                                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                                        </div>
                                        <div class="list-post-content">
                                            <h3><a href="post-single.html">Goodwin must Break Clarkson hold </a></h3>
                                            <span class="post-date"><i class="far fa-clock"></i> 18 may 2022</span>
                                            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit
                                                amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris
                                                elementum accumsan leo vel tempor. </p>
                                            <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i> 6 </li>
                                                <li><i class="fal fa-eye"></i> 587 </li>
                                            </ul>
                                            <div class="author-link"><a href="author-single.html"><img
                                                        src="images/avatar/1.jpg" alt=""> <span>By Jane
                                                        Taylor</span></a></div>
                                        </div>
                                    </div>
                                    <!--list-post end-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="picker-wrap-container fl-wrap">
                                    <div class="picker-wrap-controls">
                                        <ul class="fl-wrap">
                                            <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                            <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                            <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="picker-wrap fl-wrap">
                                        <div class="list-post-wrap  fl-wrap">
                                            {{-- loop throuhgh this post --}}
                                            @foreach ($posts as $post)
                                                <!--list-post-->
                                                <div class="list-post fl-wrap">
                                                    <div class="list-post-media">
                                                        <a href="{{ route('blog.single', $post->id) }}">
                                                            <div class="bg-wrap">
                                                                <div class="bg"
                                                                    data-bg="{{ asset('storage/' . $post->image->filename) }}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="list-post-content">
                                                        <h3><a
                                                                href="{{ route('blog.single', $post->id) }}">{{ $post->title }}</a>
                                                        </h3>
                                                        <span class="post-date"><i class="far fa-clock"></i>
                                                            {{ $post->created_at->format('jS F, o, g:i A') }}
                                                        </span>
                                                        <p>
                                                            {!! Str::limit($post->body, 150) !!}
                                                        </p>
                                                        <div class="author-link">
                                                            <span>
                                                                {{ Str::limit($post->user->name, 30) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--list-post end-->
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="controls-limit fl-wrap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="limit-box"></div>
                </section>

                <div class="gray-bg ad-wrap fl-wrap">
                    <div class="content-banner-wrap">
                        <img src="{{ asset('images/all/banner.jpg') }}" class="respimg" alt="">
                    </div>
                </div>
                <!-- section end -->
            </div>
        </div>
    </div>
