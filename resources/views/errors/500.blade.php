 @extends('layouts.app')

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
                    <h2>500</h2>
                    <p>We're sorry, but the Page you were looking for, couldn't be found.</p>
                    <a href="{{ route('home') }}" class="btn color-btn flat-btn"> <span>Back to Home Page</span> <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        </section>
        <!-- section end  -->
    </div>
    <!-- content  end-->
    @endsection
