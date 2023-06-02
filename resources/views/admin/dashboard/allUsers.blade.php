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
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                            class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Balance</th>
                                            <th>Phone</th>
                                            <th>Level</th>
                                            <th>Tid</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->balance }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td>{{ $user->trxIds->tid ?? 'UnPaidUser' }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Approve.User.Account.Request', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-success">Approved</a>
                                                    <a href="{{ route('Admin.Rejected.User.Account.Request', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-primary">Reject</a>
                                                    <a href="{{ route('Admin.Edit.User', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
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

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © copyright - Reserved by <a href="#"><img
                                        src="{{ asset('admin/img/logo.png') }}" alt=""></a><a href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <table id="example" class="display" style="min-width: 845px">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Phone</th>
            <th>Level</th>
            <th>Tid</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->balance }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->trxIds->tid ?? 'UnPaidUser' }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="{{ route('Admin.Approve.User.Account.Request', ['id' => $user->id]) }}"
                        class="btn btn-sm btn-success">Approved</a>
                    <a href="{{ route('Admin.Rejected.User.Account.Request', ['id' => $user->id]) }}"
                        class="btn btn-sm btn-primary">Reject</a>
                    <a href="{{ route('Admin.Edit.User', ['id' => $user->id]) }}"
                        class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
