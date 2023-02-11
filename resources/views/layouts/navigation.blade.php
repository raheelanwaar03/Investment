<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }} - HYIP Investment HTML Template</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- bootstrap links --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="main--body">
        <!--========== Preloader ==========-->
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        {{-- Header --}}
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <ul class="support-area">
                                @if (!auth()->user())
                                    <li>
                                        <p>You have to Login first if you want working with us.</p>
                                    </li>
                                @else
                                    <li>
                                        <p>Wellcome {{ auth()->user()->username }}! you are successfully Login.</p>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="cart-area">
                                @if (auth()->user())
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-primary">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">Sign Up</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-area">
                        <div class="logo">
                            <a href="{{ route('LandingPage') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('LandingPage') }}">Home</a>
                            </li>
                            @if (auth()->user())
                                <li>
                                    <a href="{{ route('User.Dashboard') }}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('LandingPage.Product') }}">Products</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('LandingPage.Affilate') }}">Affiliate</a>
                            </li>
                            <li>
                                <a href="{{ route('LandingPage.Contact') }}">Contact</a>
                            </li>
                            <li class="pr-0">
                                <a href="{{ route('register') }}" class="custom-button">Join Us</a>
                            </li>
                        </ul>
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
