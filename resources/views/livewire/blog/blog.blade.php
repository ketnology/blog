<div>
    <!-- wrapper -->
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <div class="breadcrumbs-header fl-wrap">
                <div class="container">
                    <div class="breadcrumbs-header_url">
                        <a href="{{ route('home') }}">Home</a><span>Blog List style</span>
                    </div>
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll Down To Discover</span>
                    </div>
                </div>
                <div class="pwh_bg"></div>
            </div>
            <!--section   -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-container fl-wrap fix-container-init">

                                <div class="list-post-wrap">

                                    @foreach ($posts as $post)
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg"
                                                            data-bg="{{ asset('storage/' . $post->image->filename) }}">
                                                        </div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <h3>
                                                    <a href="{{ route('blog.single', $post->id) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                                <span class="post-date">
                                                    <i
                                                        class="far fa-clock"></i>
                                                        {{ $post->created_at->format('jS F, o, g:i A') }}
                                                    </span>
                                                <p>
                                                    {!! Str::limit($post->body, 150) !!}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="sidebar-content fl-wrap fixed-bar">
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="images/bg/7.jpg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
            </section>

            <div class="gray-bg ad-wrap fl-wrap">
                <div class="content-banner-wrap">
                    <img src="images/all/banner.jpg" class="respimg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
