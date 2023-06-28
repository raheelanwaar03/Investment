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
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Pending Users</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Edit Referal Setting</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('Admin.Setting.update', $setting->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label class="mt-2">First Commission</label>
                                                    <input type="number" name="first_refer"
                                                        value="{{ $setting->first_refer }}" class="form-control"
                                                        placeholder="Enter User First referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">Second Commission</label>
                                                    <input type="number" name="second_refer"
                                                        value="{{ $setting->second_refer }}" class="form-control"
                                                        placeholder="Enter User Second Referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">Third Commission</label>
                                                    <input type="number" name="third_refer"
                                                        value="{{ $setting->third_refer }}" class="form-control"
                                                        placeholder="Enter User Third Referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="m-3">Edit Minimum Widthraw</label>
                                                    <input type="text" name="minimum_amount"
                                                        value="{{ $setting->minimum_amount }}" class="form-control"
                                                        placeholder="Minimum Widthraw">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="m-3">Edit Maximum Widthraw</label>
                                                    <input type="text" name="maximun_amount"
                                                        value="{{ $setting->maximun_amount }}" class="form-control"
                                                        placeholder="Maximun Widthraw">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
