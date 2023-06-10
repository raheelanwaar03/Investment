@extends('admin.layout.app')

@section('content')
    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="{{ asset('admin/img/icon/icon_search.svg') }}"
                                            alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('admin/img/client_img.png') }}" alt="#">
                                <div class="profile_info_iner">
                                    <p>{{ auth()->user()->role }} </p>
                                    <h5>{{ auth()->user()->name }}</h5>
                                    <div class="profile_info_details">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <button type="submit" style="border: none;font-size:16px;color:white;"
                                                class="bg-transparent">Log Out <i class="ti-shift-left"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h2 class="text-center">Edit Task Details</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Product.update', $product->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="" class="m-3">Price</label>
                                        <input type="text" name="product_price" class="form-control"
                                            value="{{ $product->product_price }}" class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Level</label>
                                        <input type="text" name="product_level" class="form-control"
                                            value="{{ $product->product_level }}" class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Video</label>
                                        <input type="file" name="video" class="form-control">
                                    </div>
                                    <div class="my-3">
                                        <img src="{{ asset('images/' . $product->product_img) }}" alt="product img"
                                            width="200px" height="200px">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © copyright - Reserved by <a href="#"><img src="{{ asset('admin/img/logo.png') }}"
                                        alt=""></a><a href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
