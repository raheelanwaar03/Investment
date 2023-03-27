@extends('admin.layout.app')

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Approved Widthraw Request</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Bank</th>
                                            <th>Number</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($widthrawRequests as $widthrawRequest)
                                            <tr>
                                                <td>{{ $widthrawRequest->widthraw_name }}</td>
                                                <td>{{ $widthrawRequest->widthraw_bank }}</td>
                                                <td>{{ $widthrawRequest->widthraw_num }}</td>
                                                <td>{{ $widthrawRequest->widthraw_amount }}</td>
                                                <td>{{ $widthrawRequest->status }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Reject.Widthraw', ['id' => $widthrawRequest->id]) }}"
                                                        class="btn btn-sm btn-danger">Reject</a>
                                                </td>
                                                <td>{{ $widthrawRequest->created_at }}</td>
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
@endsection
