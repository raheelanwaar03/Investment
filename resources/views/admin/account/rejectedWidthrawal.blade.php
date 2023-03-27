@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rejected Widthraw Request</h4>
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
                                                    <a href="{{ route('Admin.Approve.Widthraw', ['id' => $widthrawRequest->id]) }}"
                                                        class="btn btn-sm btn-success">Approve</a>
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

