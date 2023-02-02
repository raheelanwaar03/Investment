@extends('admin.layout.app')

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
                                                <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                    alt="dashboard">
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
                                                        <button type="submit"><i class="fas fa-sign-out-alt"></i>Log
                                                            Out</button>
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
                <h3 class="title">Admin Dashboard</h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Dashboard
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt--85">
                <h2 class="text-center text-white">All Users</h2>
                <hr>
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr class="text-white">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>Register Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->country }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
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

@section('datatable')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection
