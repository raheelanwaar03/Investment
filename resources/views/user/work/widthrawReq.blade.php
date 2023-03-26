@extends('user.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Referal Friends</h4>
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
@endsection
