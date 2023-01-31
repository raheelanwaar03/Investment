<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hyipland - HYIP Investment HTML Template</title>

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
                        <a href="dashboard.html">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="dashboard.html" class="active"><i class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="operations.html"><i class="flaticon-coin"></i>Operations</a>
                        </li>
                        <li>
                            <a href="deposit.html"><i class="flaticon-interest"></i>Deposits</a>
                        </li>
                        <li>
                            <a href="withdraw.html"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="fund-transfer.html"><i class="flaticon-exchange"></i>Fund Transfer </a>
                        </li>
                        <li>
                            <a href="partners.html"><i class="flaticon-deal"></i>Partners</a>
                        </li>
                        <li>
                            <a href="setting.html"><i class="flaticon-gears"></i>Settings</a>
                        </li>
                        <li>
                            <a href="notification.html"><i class="flaticon-bell"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="ticket.html"><i class="flaticon-sms"></i>Tickets</a>
                        </li>
                        <li>
                            <a href="promotional-metarials.html"><i class="flaticon-deal"></i>Promotional</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="border: none"><i
                                        class="flaticon-right-arrow"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
