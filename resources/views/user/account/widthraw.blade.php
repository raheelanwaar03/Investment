@extends('user.layout.app')


@section('content')
    <div class="content-body">
        @if ($message = Session::get('massage'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Welcome to User Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Total Balance</span>
                                        <h2>{{ auth()->user()->balance }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Widthrawal Balance</span>
                                        <h2>{{ userWidthrawalBalance() }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Pending Balance</span>
                                        <h2>{{ userPendingBalance() }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-12">
                            <div class="text-center">
                                <a href="{{ route('User.Widthraw.Request') }}" class="btn btn-primary">Widthraw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">History</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <th>Name</th>
                                                <th>Bank</th>
                                                <th>Number</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($widthraws as $widthraw)
                                                    <tr>
                                                        <td>{{ $widthraw->widthraw_name }}</td>
                                                        <td>{{ $widthraw->widthraw_bank }}</td>
                                                        <td>{{ $widthraw->widthraw_num }}</td>
                                                        <td>{{ $widthraw->widthraw_amount }}</td>
                                                        <td>{{ $widthraw->status }}</td>
                                                        <td>{{ $widthraw->created_at }}</td>
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
            </div>
        </div>
    </div>
    </div>
@endsection
