@extends('layouts.app')

@section('content')
    <div class="slider-area">
        <div class="slider-wrapper">
            <div class="single-slide" style="background-image: url('{{ asset('assets/img/slider/1.jpg') }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h3 class="title1 pt-65">Welcome to {{ env('APP_NAME') }}</h3>
                                        <h1 class="title2">Are you looking for a job online to work at home.</h1>
                                        <p>Work at your part time / full time and money from online job,Data entry jobs,Form
                                            filling jobs.Wrok from your PC,Laptop or Mobile.</p>
                                        <div class="banner-readmore">
                                            <a href="{{route('register')}}" class="button banner-btn" href="#">Register Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image: url('{{ asset('assets/img/slider/1.jpg') }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text-content-wrapper slide-two">
                                    <div class="text-content text-center">
                                        <h3 class="title1 pt-65">Welcome to {{ env('APP_NAME') }}</h3>
                                        <h1 class="title2">Are you looking for a job online to work at home.</h1>
                                        <p>Work at your part time / full time and money from online job,Data entry jobs,Form
                                            filling jobs.Wrok from your PC,Laptop or Mobile.</p>
                                        <div class="banner-readmore">
                                            <a href="{{route('register')}}" class="button banner-btn" href="#">Register Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area pt-120 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-55">
                        <h2>Our Features</h2>
                        <p>Browse jobs from your interested sector.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Data Entry</h4>
                            <p>You can do simple data entry jobs at your home.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Typing Jobs</h4>
                            <p>You can do simple typing jobs and you will be earn well!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Simple Task</h4>
                            <p>We will give you simple task.That you have to daily for your daily earning</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Refer Friend</h4>
                            <p>You can also earn from our referal program by inviting your friends</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Easy Widthraw</h4>
                            <p>You can simply widthraw your earning in your easypaisa or jazzcash account.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Contact us</h4>
                            <p>You can contact us we are here to help you 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Advertise Area Start -->
    <div class="advertise-area bg-2 overlay-green">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="advertise-text text-white text-center">
                        <h2>We work at home</h2>
                        <p>We are a agency which offer you working at home.We offer typing and Ms office Excel jobs which
                            you can compelet at home.</p>
                        <a href="{{ route('register') }}" class="default-button btn-white">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advertise Area End -->
    <!-- Features Area Start -->
    <div class="features-area bg-light fix">
        <div class="feature-left-column">
            <img src="{{ asset('assets/img/banner/2.jpg') }}" alt="">
        </div>
        <div class="feature-right-column">
            <div class="coustom-col-10">
                <div class="feature-text">
                    <h3><span>Why You</span></h3>
                    <h2>Choose {{ env('APP_NAME') }}</h2>
                    <p>Work at your part time / full time and money from online job,Data entry jobs,Form
                        filling jobs.Wrok from your PC,Laptop or Mobile</p>
                </div>
            </div>
            <div class="custom-row">
                <div class="coustom-col-5">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Jobs</h4>
                            <p>Browse jobs from your interested sector.</p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Profile</h4>
                            <p>Submit your job profile and get hired by employers.</p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Task</h4>
                            <p>Practice tasks from the member area.</p>
                        </div>
                    </div>
                </div>
                <div class="coustom-col-5">
                    <div class="single-item">
                        <div class="service-text">
                            <h4>Changes</h4>
                            <p>Update your Profile adn job preferences at anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="asked-area pt-120 pb-85 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sub_title">
                        <h3>Reqeust a Call Back</h3>
                        <p>You will get your profit on your profile, also you will get Instant Payment</p>

                    </div>
                    <form id="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-box">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="default-button submit-btn">Submit Now</button>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="default-panel">
                        <div class="sub_title">
                            <h3>Frequently Ask Qustion</h3>
                            <p>{{ env('APP_NAME') }} is worldwide investment company who are committed to the principle of
                                revenue maximization and reduction of the financial risks at investing.</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="card-title">
                                        <a role="button" data-bs-toggle="collapse" aria-expanded="true" href="#one"
                                            aria-controls="one">
                                            <span></span> What kind of Financial Consultancy you need
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>We have many happy investors invest with us .Some impresions from our Customers!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-bs-toggle="collapse" aria-expanded="false"
                                            href="#two" aria-controls="two">
                                            <span></span> How we help you for your Business
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>We have many happy investors invest with us .Some impresions from our Customers!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-bs-toggle="collapse" aria-expanded="false"
                                            href="#three" aria-controls="three">
                                            <span></span> Financial Advice
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Click Sign Up to fill the blank, our 256 SSL will Protect your privacy. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-bs-toggle="collapse" aria-expanded="false"
                                            href="#four" aria-controls="four">
                                            <span></span> What is the best Business plan for you
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Click Sign Up to fill the blank, our 256 SSL will Protect your privacy. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFive">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-bs-toggle="collapse" aria-expanded="false"
                                            href="#five" aria-controls="five">
                                            <span></span> Which is the right plan for Retirement
                                        </a>
                                    </h4>
                                </div>
                                <div id="five" class="collapse" role="tabpanel" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Click Sign Up to fill the blank, our 256 SSL will Protect your privacy. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Asked Area End -->
    <!-- Fun Factor Start -->
    <div class="fun-factor-area bg-3 overlay-green pt-100 fix pb-95">
        <div class="container">
            <div class="fun-custom-row">
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/cup.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">750</span></h2>
                        </div>
                        <h4>Cup Of Coffee</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/check.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">350</span></h2>
                        </div>
                        <h4>Case Complete</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/face.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">180</span></h2>
                        </div>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/teams.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">62</span></h2>
                        </div>
                        <h4>Team Member</h4>
                    </div>
                </div>
                <div class="fun-custom-column">
                    <div class="single-fun-factor">
                        <div class="text-icon block">
                            <img src="{{ asset('assets/img/icons/trophy.png') }}" alt="" class="mr-15">
                            <h2><span class="counter">45</span></h2>
                        </div>
                        <h4>Awards Win</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fun Factor End -->
    <!-- Team Area Start -->
    <div class="team-area fix pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title text-center mb-95">
                        <h2>Our Team</h2>
                        <p>{{ env('APP_NAME') }}We give you the opportunity to earn money by recommending our website to
                            others. You can start earning money even if you do not invest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Robert Williams</a></h3>
                            <span>Chef Executive Officer</span>
                            <p>{{ env('APP_NAME') }} We are worldwide investment company who are committed to the principle
                                of revenue maximization and reduction of the financial risks at investing.
                                ostrud </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Jasmin Jaquline</a></h3>
                            <span>Financial Advisor</span>
                            <p>{{ env('APP_NAME') }} We are worldwide investment company who are committed to the principle
                                of revenue maximization and reduction of the financial risks at investing.
                                ostrud </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Sharlok Homes</a></h3>
                            <span>Chef Executive Officer</span>
                            <p>{{ env('APP_NAME') }} We are worldwide investment company who are committed to the principle
                                of revenue maximization and reduction of the financial risks at investing.
                                ostrud </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-member">
                        <div class="member-image">
                            <a href="#" class="block">
                                <img src="{{ asset('assets/img/team/4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="member-text">
                            <h3><a href="#">Rose Smith</a></h3>
                            <span>Financial Consultant</span>
                            <p>{{ env('APP_NAME') }} We are worldwide investment company who are committed to the principle
                                of revenue maximization and reduction of the financial risks at investing.
                                ostrud </p>
                            <div class="link-effect">
                                <ul>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/call.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/call-hover.png') }}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/facebook.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/facebook-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/twitter.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/twitter-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block p-img"><img
                                                src="{{ asset('assets/img/icons/google-plus.png') }}" alt=""></a>
                                        <a href="#" class="block s-img"><img
                                                src="{{ asset('assets/img/icons/google-plus-hover.png') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widget-area bg-4 overlay-blue pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-1 order-1">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/footer-logo.png') }}"
                                    height="70px" width="188px" alt="{{ env('APP_NAME') }}"></a>
                        </div>
                        <p></p>
                        </p>
                        <form action="#" id="mc-form" class="mc-form fix">
                            <div class="subscribe-form">
                                <input id="mc-email" type="email" name="email" placeholder="Email for Newsletter">
                                <button id="mc-submit" type="submit"><i class="fa fa-send"></i></button>
                            </div>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre fix text-small">
                            <div class="mailchimp-submitting"></div>
                            <!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div>
                            <!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div>
                            <!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-3 order-2">
                    <div class="single-footer-widget mt-sm-30">
                        <h3>POPULAR POST</h3>
                        <div class="footer-widget-content">
                            <h5>Duplex Villa Design</h5>
                            <span> </span>
                        </div>
                        <div class="footer-widget-content">
                            <h5>Real Estate Fest</h5>
                            <span>Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-2 order-3">
                    <div class="single-footer-widget">
                        <h3>QUICK LINK</h3>
                        <ul class="footer-list">
                            <li><a href="{{ route('LandingPage') }}">Home</a></li>
                            <li><a href="{{ route('LandingPage.About.Us') }}">About us</a></li>
                            <li><a href="{{ route('LandingPage.Contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-md-4 order-4">
                    <div class="single-footer-widget mt-sm-30">
                        <h3>CONTACT US</h3>
                        <div class="footer-contact-info">
                            <img src="{{ asset('assets/img/icons/f-map.png') }}" alt="">
                            <span class="block">{{ env('APP_ADDRESS') }}</span>
                        </div>
                        <div class="footer-contact-info">
                            <img src="{{ asset('assets/img/icons/f-phone.png') }}" alt="">
                            <span class="block">Telephone : {{ env('APP_NUM') }}<br>
                        </div>
                        <div class="footer-contact-info">
                            <img src="{{ asset('assets/img/icons/f-globe.png') }}" alt="">
                            <span class="block">Email : {{ env('APP_EMAIL') }}<br>
                                Web : {{ env('APP_URL') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
