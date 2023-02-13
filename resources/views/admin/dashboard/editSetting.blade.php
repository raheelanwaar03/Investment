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
                                    </a>
                                    <div class="notification-area">
                                        <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                        </div>
                                        <div class="notifacation-footer text-center">
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
                                                <a href="{{ route('profile.edit') }}" class="text-seconday"><i class="fas fa-user-edit"></i>Edit
                                                    Profile</a>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-sign-out-alt"></i>Log
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
                        Update limit
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt--85">
                <h2 class="text-center text-white">Update Limit</h2>
                <hr>
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('Admin.Setting.update',$setting->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                            <label for="" class="m-3">Edit Refer Amount</label>
                            <input type="text" name="refer_amount" value="{{ $setting->refer_amount }}" class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                    </div>
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
