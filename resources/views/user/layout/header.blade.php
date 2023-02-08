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

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="main--body dashboard-bg">
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
        <div class="overlay"></div>

        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <div class="side-header oh">
                <div class="cross-header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="site-header-container">
                    <div class="side-logo">
                        <a href="{{ route('LandingPage') }}">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="{{ route('User.Dashboard') }}" class="active"><i class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Refer.New.Friend') }}"><i class="flaticon-interest"></i>Refer Friend</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Team') }}"><i class="flaticon-team"></i>Team</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Widthraw.Balance') }}"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                         <li>
                            <a href="{{ route('User.Widthraw.Request') }}"><i class="flaticon-atm"></i>All Withdraw</a>
                        </li>
                        <li>
                            <a href="fund-transfer.html"><i class="flaticon-exchange"></i>Level</a>
                        </li>
                        <li>
                            <a href="partners.html"><i class="flaticon-deal"></i>Partners</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="border: none" class="btn btn-danger"><i
                                        class="flaticon-right-arrow"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
