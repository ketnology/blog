 @extends('layouts.main')
 
 @section('content')
    
 <!-- wrapper -->
 <div id="wrapper">
    <!-- content    -->
    <div class="content">
        <!--section   -->
        <section class="hero-section error-section">
            <div class="bg-wrap hero-section_bg">
                <div class="bg" data-bg="images/bg/6.jpg"></div>
            </div>
            <div class="container">
                <div class="error-wrap">
                    <h2>404</h2>
                    <p>We're sorry, but the Page you were looking for, couldn't be found.</p>
                    <div class="clearfix"></div>
                    <form action="#" class="custom-form">
                        <input name="se" id="se2" type="text" class="search" placeholder="Search.." value="Search...">
                        <button class="search-submit color-bg" id="submit_btn2"><i class="fa fa-search"></i> </button>
                    </form>
                    <div class="clearfix"></div>
                    <p>Or</p>
                    <a href="index.html" class="btn color-btn flat-btn"> <span>Back to Home Page</span> <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        </section>
        <!-- section end  -->
    </div>
    <!-- content  end-->
    @endsection