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
                                <div class="select-area">
                                    <select class="select-bar" style="display: none;">
                                        <option value="en">English</option>
                                        <option value="bn">Bangla</option>
                                        <option value="sp">Spanish</option>
                                    </select>
                                </div>
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
                                    <a href="#0">
                                        <i class="flaticon-email-1"></i>
                                        <span class="number bg-theme-2">4</span>
                                    </a>
                                    <div class="notification-area">
                                        <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                            <span>4 New Notifications</span>
                                            <a href="#0">Clear</a>
                                        </div>
                                        <ul class="notification-body">
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                            alt="dashboard">
                                                    </div>
                                                    <div class="cont">
                                                        <span class="title">Robinhood Pandey</span>
                                                        <div class="message">Electus rem placeat perspiciatis
                                                            saepe</div>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                            alt="dashboard">
                                                    </div>
                                                    <div class="cont">
                                                        <span class="title">Robinhood Pandey</span>
                                                        <div class="message">Electus rem placeat perspiciatis
                                                            saepe</div>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                            alt="dashboard">
                                                    </div>
                                                    <div class="cont">
                                                        <span class="title">Robinhood Pandey</span>
                                                        <div class="message">Electus rem placeat perspiciatis
                                                            saepe</div>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="notifacation-footer text-center">
                                            <a href="#0" class="view-all">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="flaticon-notification"></i>
                                        <span class="number bg-theme">4</span>
                                    </a>
                                    <div class="notification-area">
                                        <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                            <span>4 New Notifications</span>
                                            <a href="#0">Clear</a>
                                        </div>
                                        <ul class="notification-body">
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <i class="flaticon-man"></i>
                                                    </div>
                                                    <div class="cont">
                                                        <span class="subtitle">New Affiliate Registered</span>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <i class="flaticon-atm"></i>
                                                    </div>
                                                    <div class="cont">
                                                        <span class="subtitle">New deposit completed</span>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <i class="flaticon-wallet"></i>
                                                    </div>
                                                    <div class="cont">
                                                        <span class="subtitle">New Withdraw completed</span>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <div class="icon">
                                                        <i class="flaticon-exchange"></i>
                                                    </div>
                                                    <div class="cont">
                                                        <span class="subtitle">Fund Transfer Completed</span>
                                                        <span class="info">2 Sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="notifacation-footer text-center">
                                            <a href="#0" class="view-all">View All</a>
                                        </div>
                                    </div>
                                </li>
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
                                                <img src="assets/images/dashboard/author.png" alt="dashboard">
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
                                                    <a href="#0"><i class="fas fa-sign-out-alt"></i>Log
                                                        Out</a>
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
                        Refer New Friend
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid m-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-4">
                    <div class="card shadow bordered-primary mb-4">
                        <div>
                            <input type="text" style="width: 100%;border:none"
                                value="{{ route('register', ['referal' => Auth::user()->username]) }}" id="myInput">
                            <button onclick="copy()" class="btn btn-secondary px-2">copy</button>
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


<script>
    function copy() {
      // Get the text field
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      navigator.clipboard.writeText(copyText.value);

      // Alert the copied text
      alert("Copied the text: " + copyText.value);
    }
    </script>

@endsection
