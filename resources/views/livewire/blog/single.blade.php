<div>
    <div id="wrapper">
        <div class="content">
            <div class="breadcrumbs-header fl-wrap">
                <div class="container">
                    <div class="breadcrumbs-header_url">
                        <a href="{{ route('home') }}">Home</a>
                        <span>Blog List style</span>
                        <span>Blog List style</span>
                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8" id="printableArea">
                            <div class="main-container fl-wrap fix-container-init">
                                <div class="single-post-header fl-wrap">
                                    <div class="clearfix"></div>
                                    <h1>Innovations that Bring Pleasure to All Peoples</h1>
                                    <div class="clearfix"></div>
                                    <span class="post-date">
                                        <i class="far fa-clock"></i>
                                        05 April 2022
                                    </span>
                                </div>

                                <div class="single-post-media fl-wrap">
                                    <div class="single-slider-wrap fl-wrap">
                                        <div class="single-slider fl-wrap">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper lightgallery">
                                                    <div class="swiper-slide hov_zoom">
                                                        <img src="{{ asset('images/all/20.jpg') }}" alt="">
                                                        <a href="{{ asset('images/all/20.jpg') }}" class="box-media-zoom popup-image">
                                                            <i class="fas fa-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-post-content spc_column fl-wrap">
                                    <div class="fs-wrap smpar fl-wrap">
                                        {{-- <a class="print-btn" href="javascript:window.print()" data-microtip-position="bottom"> --}}
                                        <a class="print-btn" onclick="printDiv('printableArea')" data-microtip-position="bottom">
                                            <span>Print</span>
                                            <i class="fal fa-print"></i>
                                        </a>
                                        <script>
                                            function printDiv(divName) {
                                                var printContents = document.getElementById(divName).innerHTML;
                                                var originalContents = document.body.innerHTML;
                                                document.body.innerHTML = printContents;
                                                window.print();
                                                document.body.innerHTML = originalContents;
                                            }
                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="single-post-content_text" id="font_chage">

                                        <p class="has-drop-cap">Lorem ipsum dosectetur adipisicing elit, sed
                                            do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo
                                            dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet
                                            cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at
                                            felis. Sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla
                                            purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue.
                                            Mauris elementum accumsan leo vel tempor . Aliquam et elit eu nunc
                                            rhoncus viverra quis at felis. Sed do.Lorem ipsum dolor sit amet,
                                            consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing
                                            elit at leo dignissim congue. Mauris elementum accumsan leo vel tempor
                                        </p>

                                        <h4 class="mb_head">Middle Post Heading</h4>

                                        <p>
                                            Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit
                                            amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris
                                            elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. Aliquam
                                            et elit eu nunc rhoncus viverra quis at felis. Sed do.Lorem ipsum dolor
                                            sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur
                                            adipisicing elit at leo dignissim congue. Mauris elementum accumsan leo
                                            vel tempor . Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed
                                            do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem
                                            ipsum dosectetur adipisicing elit at leo dignissim congue. Mauris
                                            elementum accumsan leo vel tempor
                                        </p>
                                    </div>
                                </div>
                                <div class="limit-box2 fl-wrap"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="sidebar-content fl-wrap fixed-bar">
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="{{ asset('images/bg/7.jpg') }}"></div>
                                            </div>
                                            <div class="banner-widget_content">
                                                <a href="{{ route('blog') }}" class="btn float-btn color-bg small-btn">
                                                    Our
                                                    Blog
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Follow Us</div>
                                    <div class="box-widget-content">
                                        <div class="social-widget">
                                            <a href="#" target="_blank" class="facebook-soc">
                                                <i class="fab fa-facebook-f"></i>
                                                <span class="soc-widget-title">Likes</span>
                                            </a>
                                            <a href="#" target="_blank" class="twitter-soc">
                                                <i class="fab fa-twitter"></i>
                                                <span class="soc-widget-title">Followers</span>
                                            </a>
                                            <a href="#" target="_blank" class="youtube-soc">
                                                <i class="fab fa-youtube"></i>
                                                <span class="soc-widget-title">Followers</span>
                                            </a>
                                            <a href="#" target="_blank" class="instagram-soc">
                                                <i class="fab fa-instagram"></i>
                                                <span class="soc-widget-title">Followers</span>
                                            </a>
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
                    <img src="{{ asset('images/all/banner.jpg') }}" class="respimg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
