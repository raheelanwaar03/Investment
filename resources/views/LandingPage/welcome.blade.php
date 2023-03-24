@extends('layouts.app')

@section('content')
    <!--=======Banner-Section Starts Here=======-->
    <section class="banner-section" id="home">
        <div class="banner-bg d-lg-none">
            <img src="assets/images/banner/banner-bg2.jpg" alt="banner">
        </div>
        <div class="banner-bg d-none d-lg-block bg_img" data-background="assets/images/banner/banner.jpg">
            <div class="chart-1 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
                <img src="assets/images/banner/chart1.png" alt="banner">
            </div>
            <div class="chart-2 wow fadeInDown" data-wow-delay="1s" data-wow-duration=".7s">
                <img src="assets/images/banner/chart2.png" alt="banner">
            </div>
            <div class="chart-3 wow fadeInRight" data-wow-delay="1.5s" data-wow-duration=".7s">
                <img src="assets/images/banner/chart3.png" alt="banner">
            </div>
            <div class="chart-4 wow fadeInUp" data-wow-delay="2s" data-wow-duration=".7s">
                <img src="assets/images/banner/clock.png" alt="banner">
            </div>
        </div>
        <div class="animation-area d-none d-lg-block">
            <div class="plot">
                <img src="assets/images/banner/plot.png" alt="banner">
            </div>
            <div class="element-1 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/light.png" alt="banner">
            </div>
            <div class="element-2 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin1.png" alt="banner">
            </div>
            <div class="element-3 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin2.png" alt="banner">
            </div>
            <div class="element-4 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin3.png" alt="banner">
            </div>
            <div class="element-5 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin4.png" alt="banner">
            </div>
            <div class="element-6 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin5.png" alt="banner">
            </div>
            <div class="element-7 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin6.png" alt="banner">
            </div>
            <div class="element-8 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/sheild.png" alt="banner">
            </div>
            <div class="element-9 wow fadeIn" data-wow-delay="1s">
                <img src="assets/images/banner/coin7.png" alt="banner">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                    <div class="banner-content">
                        <h1 class="title">Simply <span>Profitably </span> Conveniently</h1>
                        <p>
                            A Profitable platform for high-margin investment
                        </p>
                        <div class="button-group">
                            <a href="{{ route('register') }}" class="custom-button">Get Started Now!</a>
                            <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="popup video-button"><i
                                    class="flaticon-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="counter-section">
        <div class="container">
            <div class="row align-items-center mb-30-none justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter01.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h3 class="title odometer" data-odometer-final="36.9">0</h3>
                                <h3 class="title">M</h3>
                            </div>
                            <p>Registered users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter02.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h3 class="title odometer" data-odometer-final="174">0</h3>
                            </div>
                            <p>Countries Supported</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="counter-item">
                        <div class="counter-thumb">
                            <img src="assets/images/counter/counter03.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-header">
                                <h3 class="title">$</h3>
                                <h3 class="odometer title" data-odometer-final="10.8">0</h3>
                                <h3 class="title">M</h3>
                            </div>
                            <p>Average Investment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======Counter-Section Ends Here=======-->


    <!--=======About-Section Starts Here=======-->
    <section class="about-section padding-top padding-bottom" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block rtl">
                    <img src="assets/images/about/about.png" alt="about">
                </div>
                <div class="col-lg-6">
                    <div class="section-header left-style">
                        <span class="cate">WELCOME TO {{ env('APP_NAME') }}</span>
                        <h2 class="title">about {{ env('APP_NAME') }}</h2>
                        <p>
                            {{ env('APP_NAME') }} is an investment company, whose team is working on making money from the
                            volatility of
                            cryptocurrencies and offer great returns to our clients.
                        </p>
                    </div>
                    <div class="about--content">
                        <div class="about-item">
                            <div class="about-thumb">
                                <img src="assets/images/about/about01.png" alt="about">
                            </div>
                            <div class="about-content">
                                <h5 class="title">Secure & Reliable</h5>
                                <p>
                                    Secure assets fund for users
                                </p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="about-thumb">
                                <img src="assets/images/about/about02.png" alt="about">
                            </div>
                            <div class="about-content">
                                <h5 class="title">Fast Withdrawals</h5>
                                <p>
                                    Quick money withdrawals for users
                                </p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="about-thumb">
                                <img src="assets/images/about/about03.png" alt="about">
                            </div>
                            <div class="about-content">
                                <h5 class="title">Guaranteed</h5>
                                <p>
                                    Your return on investment is guaranteed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======About-Section Ends Here=======-->


    <!--=======Feature-Section Starts Here=======-->
    <section class="feature-section padding-top padding-bottom bg_img"
        data-background="./assets/images/feature/feature-bg.png" id="feature">
        <div class="ball-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="assets/images/balls/ball1.png" alt="balls">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="assets/images/balls/ball2.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="assets/images/balls/ball3.png" alt="balls">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-header">
                        <span class="cate">Our Amazing Features</span>
                        <h2 class="title">
                            why should you invest
                        </h2>
                        <p class="mw-100">
                            We are worldwide investment company who are committed to the principle of revenue
                            maximization and reduction of the financial risks at investing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center feature-wrapper">
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/feature01.png" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Profitable Investment</h5>
                            <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/feature02.png" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">DDS Protection</h5>
                            <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <img src="assets/images/feature/feature03.png" alt="feature">
                        </div>
                        <div class="feature-content">
                            <h5 class="title">24/7 Support Center</h5>
                            <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======Feature-Section Ends Here=======-->


    <!--=======How-Section Starts Here=======-->
    <section class="get-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-header">
                        <span class="cate">get to know</span>
                        <h2 class="title">how we work?</h2>
                        <p>
                            Follow these simple steps and make profit!
                        </p>
                    </div>
                </div>
            </div>
            <div class="hover-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-lg-block d-none">
                        <div class="hover-tab-area">
                            <div class="tab-area">
                                <div class="tab-item active first">
                                    <img src="assets/images/how/how01.png" alt="how">
                                </div>
                                <div class="tab-item second">
                                    <img src="assets/images/how/how02.png" alt="how">
                                </div>
                                <div class="tab-item third">
                                    <img src="assets/images/how/how03.png" alt="how">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="hover-tab-menu">
                            <ul class="tab-menu">
                                <li class="active">
                                    <div class="menu-thumb">
                                        <span>
                                            01
                                        </span>
                                    </div>
                                    <div class="menu-content">
                                        <h5 class="title">Instant registration</h5>
                                        <p>
                                            Click <a href="{{ route('register') }}">Sign Up</a> to fill the blank, our 256
                                            SSL will Protect
                                            your privacy.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-thumb">
                                        <span>
                                            02
                                        </span>
                                    </div>
                                    <div class="menu-content">
                                        <h5 class="title">MAKE AN INVEST</h5>
                                        <p>
                                            <a href="#0">Login</a> your account to click invest to start to earn the
                                            profit.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu-thumb">
                                        <span>
                                            03
                                        </span>
                                    </div>
                                    <div class="menu-content">
                                        <h5 class="title">get profit</h5>
                                        <p>
                                            You will get your profit on your profile, also you will get Instant Payment
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======How-Section Ends Here=======-->


    <!--=======Check-Section Starts Here=======-->
    <section class="call-section call-overlay bg_img" data-background="assets/images/call/call-bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="call--item">
                        <span class="cate">Why We are always ready</span>
                        <h3 class="title">Request a call back</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="call-button">
                        <a href="Tel:0939303" class="call">
                            <img src="assets/images/call/icon02.png" alt="call">
                        </a>
                        <a href="#0" class="custom-button"> Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profit-section padding-top" id="profit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="section-header">
                        <span class="cate">Calculate the amazing profits</span>
                        <h2 class="title">You Can Earn</h2>
                        <p>Calculate your profit before making an investment.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="profit-bg bg_img" data-background="assets/images/profit/profit-bg.png">
                <div class="animation-group">
                    <div class="platform">
                        <img src="assets/images/profit/platform.png" alt="profit">
                    </div>
                    <div class="light">
                        <img src="assets/images/profit/light.png" alt="profit">
                    </div>
                    <div class="coin-1 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin6.png" alt="profit">
                    </div>
                    <div class="coin-2 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin2.png" alt="profit">
                    </div>
                    <div class="coin-3 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin3.png" alt="profit">
                    </div>
                    <div class="coin-4 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin4.png" alt="profit">
                    </div>
                    <div class="coin-5 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin5.png" alt="profit">
                    </div>
                    <div class="coin-6 wow fadeOutDown" data-wow-delay="1s">
                        <img src="assets/images/profit/coin1.png" alt="profit">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="affiliate-programe" id="affiliate">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 padding-bottom padding-top">
                    <div class="section-header left-style">
                        <span class="cate">What You’ll Get As</span>
                        <h2 class="title fz-md-49">Affiliate Program</h2>
                        <p>
                            We give you the opportunity to earn money by recommending our website to others. You can start
                            earning money even if you do not invest.
                        </p>
                    </div>
                    <div class="affiliate-wrapper">
                        <div class="affiliate-item">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">2</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">1st</span>
                                </div>
                            </div>
                        </div>
                        <div class="affiliate-item cl-two">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">5</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">2nd</span>
                                </div>
                            </div>
                        </div>
                        <div class="affiliate-item cl-three">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">12</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">3rd</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-bottom">
                        <h6 class="title">Make money with {{ env('APP_NAME') }}</h6>
                        <a href="#0" class="custom-button">
                            learn more <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="afiliate-thumb">
                        <img src="assets/images/affiliate/affiliate.png" alt="affiliate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======Affiliate-Section Ends Here=======-->


    <!--=======Check-Section Starts Here=======-->
    <section class="call-section call-overlay bg_img" data-background="assets/images/call/call-bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-xl-6">
                    <div class="call-item text-center text-sm-left">
                        <div class="call-icon">
                            <img src="assets/images/call/icon01.png" alt="call">
                        </div>
                        <div class="call-content">
                            <h5 class="title">Ready To Start Your Earnings Through Crypto Currency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                    <a href="#0" class="custom-button">learn more <i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--=======Check-Section Ends Here=======-->


    <!--=======Check-Section Starts Here=======-->
    <section class="client-section padding-bottom padding-top">
        <div class="background-map">
            <img src="assets/images/client/client-bg.png" alt="client">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <div class="section-header left-style">
                        <span class="cate">TESTIMONIALS</span>
                        <h2 class="title"><span>40,000</span> HAPPY CLIENTS AROUND THE WORLD</h2>
                        <p class="mw-500">
                            We have many happy investors invest with us .Some impresions from our Customers!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9">
                    <div class="m--30">
                        <div class="client-slider owl-carousel owl-theme">
                            <div class="client-item">
                                <div class="client-content">
                                    <p>
                                        Perfect work to start on, support is awesome
                                    </p>
                                    <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="client-thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client01.png" alt="client">
                                    </a>
                                </div>
                            </div>
                            <div class="client-item">
                                <div class="client-content">
                                    <p>
                                        Very easy to use, perfect for invest
                                    </p>
                                    <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="client-thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client02.png" alt="client">
                                    </a>
                                </div>
                            </div>
                            <div class="client-item">
                                <div class="client-content">
                                    <p>
                                        Awesome {{ env('APP_NAME') }} most profitable site!
                                    </p>
                                    <div class="rating">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="client-thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client03.png" alt="client">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======Check-Section Ends Here=======-->
@endsection
