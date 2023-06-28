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
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Set limite Referal Commission</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('Admin.Setting.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="mt-2">User Minimum Widthraw</label>
                                                    <input type="number" name="minimum_amount" class="form-control"
                                                        placeholder="Enter User Referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">User Maximum Widthraw</label>
                                                    <input type="number" name="maximun_amount" class="form-control"
                                                        placeholder="Enter User Referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">First Commission</label>
                                                    <input type="number" name="first_refer" class="form-control"
                                                        placeholder="Enter User First referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">Second Commission</label>
                                                    <input type="number" name="second_refer" class="form-control"
                                                        placeholder="Enter User Second Referal commission">
                                                </div>
                                                <div class="form-group">
                                                    <label class="mt-2">Referal Commission</label>
                                                    <input type="number" name="third_refer" class="form-control"
                                                        placeholder="Enter User Third Referal commission">
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary">Apply</button>
                                                </div>
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
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Applied Limite</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Minimum Widthraw</th>
                                            <th>Maximum Widthraw</th>
                                            <th>First Commission</th>
                                            <th>Second Commission</th>
                                            <th>Third Commission</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($settings as $setting)
                                            <tr>
                                                <td>{{ $setting->minimum_amount }}</td>
                                                <td>{{ $setting->maximun_amount }}</td>
                                                <td>{{ $setting->first_refer }}</td>
                                                <td>{{ $setting->second_refer }}</td>
                                                <td>{{ $setting->third_refer }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Setting.edit', $setting->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
