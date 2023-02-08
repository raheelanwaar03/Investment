@extends('user.layout.app')

@section('content')
    <div class="dasboard-body">
        <div class="dashboard-hero">
            <div class="header-top">
                <div class="container">
                    <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                        <div class="author">
                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                        </div>
                        <div class="cross-header-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                        <ul class="support-area">
                            <li>
                                <a href="#0"><i class="flaticon-support"></i>Support</a>
                            </li>
                            <li>
                                <a href="Mailto:info@hyipland.com"><i class="flaticon-email"></i><span class="__cf_email__"
                                        data-cfemail="f49d9a929bb49c8d9d8498959a90da979b99">[email&#160;protected]</span>
                                </a>
                            </li>
                            <li>
                                <i class="flaticon-globe"></i>
                            </li>
                        </ul>
                        <div
                            class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                            <form class="dashboard-header-search mr-sm-4">
                                <label for="search"><i class="flaticon-magnifying-glass"></i></label>
                                <input type="text" placeholder="Search...">
                            </form>
                            <ul class="dashboard-right-menus">
                                <li>
                                    <a href="#0" class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                                            <span class="checked">
                                                <i class="flaticon-checked"></i>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                            <span class="country">{{ auth()->user()->country }}</span>
                                        </div>
                                    </a>
                                    <div class="notification-area">
                                        <div class="author-header">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                                            </div>
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                            <a href="#mailto:johndoe@gmail.com"><span class="__cf_email__"
                                                    data-cfemail="5d173235333932381d3a303c3431733e3230">[email&#160;protected]</span></a>
                                        </div>
                                        <div class="author-body">
                                            <ul>
                                                <li>
                                                    <a href="#0"><i class="far fa-user"></i>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#0"><i class="fas fa-user-edit"></i>Edit
                                                        Profile</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-block btn-primary">Logout</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-hero-content text-white">
                <h3 class="title">User Dashboard</h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('LandingPage') }}">Home</a>
                    </li>
                    <li>
                        Dashboard
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt--85">
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Balance</span>
                                <h5 class="amount">{{ auth()->user()->balance }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard1.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Level</span>
                                <h5 class="amount">{{ auth()->user()->level }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Total Referal Friends</span>
                                {{-- <h5 class="amount">{{ totalReferFriends() }}</h5> --}}
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard3.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Widthrawal Balance</span>
                                <h5 class="amount">0</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard4.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid sticky-bottom">
            <div class="dashboard-footer">
                <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                    <div class="left">
                        &copy; 2023 <a href="#0">Hyipland</a> | All right reserved.
                    </div>
                    <div class="right">
                        <ul>
                            <li>
                                <a href="#0">Terms of use</a>
                            </li>
                            <li>
                                <a href="#0">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
