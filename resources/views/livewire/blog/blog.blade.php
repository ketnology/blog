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
                                                <h3><a
                                                        href="{{ route('blog.single', $post->id) }}">{{ $post->title }}"></a>
                                                </h3>
                                                <span class="post-date"><i
                                                        class="far fa-clock"></i>{{ $post->created_at->format('jS F, o, g:i A') }}</span>
                                                <p>Struggling to sell one multi-million dollar home quite on currently
                                                    the market easily dollar home quite.</p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- sidebar   -->
                            <div class="sidebar-content fl-wrap fixed-bar">
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="images/bg/7.jpg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <!-- content-tabs-wrap -->
                                        <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                            <div class="content-tabs fl-wrap">
                                                <ul class="tabs-menu fl-wrap no-list-style">
                                                    <li class="current"><a href="#tab-popular"> Popular News </a>
                                                    </li>
                                                    <li><a href="#tab-resent">Resent News</a></li>
                                                </ul>
                                            </div>
                                            <!--tabs -->
                                            <div class="tabs-container">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-popular" class="tab-content first-tab">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/1.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">How to start Home
                                                                            education.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 25
                                                                                may 2022</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/2.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">The secret to
                                                                            moving this screening.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 13
                                                                                april 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                6</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                1227</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/3.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Fall ability to
                                                                            keep Congress on rails.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 02
                                                                                December 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/4.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Innovations that
                                                                            Bring Aesthetic Pleasure to All.</a>
                                                                    </h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 30
                                                                                september 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                44</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                684</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab  end-->
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-resent" class="tab-content">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/5.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Magpie nesting
                                                                            zone sites.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 05
                                                                                april 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                16</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                727</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/6.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Locals help
                                                                            create whole new community.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 22
                                                                                march 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                31</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                63</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img
                                                                            src="images/all/thumbs/7.jpg"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Tennis season
                                                                            still to proceed.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 06
                                                                                December 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                05</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                145</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab end-->
                                            </div>
                                            <!--tabs end-->
                                        </div>
                                        <!-- content-tabs-wrap end -->
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                            </div>
                            <!-- sidebar  end -->
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
            </section>
            <!-- section end -->
            <!-- section  -->
            <div class="gray-bg ad-wrap fl-wrap">
                <div class="content-banner-wrap">
                    <img src="images/all/banner.jpg" class="respimg" alt="">
                </div>
            </div>
            <!-- section end -->
        </div>
        <!-- content  end-->
    </div>
</div>
