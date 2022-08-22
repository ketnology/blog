<div>
    <!-- wrapper -->
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!--section   -->
            <section class="hero-section">
                <div class="bg-wrap hero-section_bg">
                    <div class="bg" data-bg="{{ asset('images/bg/8.jpg') }}"></div>
                </div>
                <div class="container">
                    <div class="hero-section_title">
                        <h2>Our Conatcts</h2>
                    </div>
                    <div class="clearfix"></div>
                    <div class="breadcrumbs-list fl-wrap">
                        <a href="#">Home</a>
                        <a href="#">Pages</a>
                        <span>Contacts</span>
                    </div>
                    <div class="scroll-down-wrap scw_transparent">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll Down To Discover</span>
                    </div>
                </div>
            </section>
            <!-- section end  -->
            <!--section   -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pr-subtitle prs_big">Details</div>
                            <!--card-item -->
                            <ul class="contacts-list fl-wrap">
                                <li>
                                    <span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH
                                        Brooklyn NY</a></li>
                                <li><span><i class="fal fa-phone"></i> Phone :</span> <a
                                        href="#">+7(123)987654</a>
                                </li>
                                <li><span><i class="fal fa-envelope"></i> Mail :</span> <a
                                        href="#">gmagnews@domain.com</a></li>
                            </ul>
                            <!--card-item end -->
                            <div class="contact-social fl-wrap">
                                <span class="cs-title">Find us on: </span>
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="pad-con fl-wrap">
                                <div class="pr-subtitle prs_big">Drop us a line</div>
                                <div id="contact-form" style="margin-top: 20px;">
                                    <div id="message"></div>
                                    <form class="custom-form" action="php/contact.php" name="contactform"
                                        id="contactform">
                                        <fieldset>
                                            <input type="text" name="name" id="name"
                                                placeholder="Your Name *" value="" />
                                            <input type="text" name="email" id="email"
                                                placeholder="Email Address*" value="" />
                                            <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                        </fieldset>
                                        <button class="btn   color-bg float-btn" id="submit">Send message <i
                                                class="fas fa-caret-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
