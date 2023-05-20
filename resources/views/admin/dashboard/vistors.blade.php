@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daily Vistors Performing Task</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>User Ip</th>
                                        <th>User Id</th>
                                        <th>Product Id</th>
                                        <th>Date&Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vistors as $vistor)
                                        <tr>
                                            <td>{{ $vistor->ip }}</td>
                                            <td>{{ $vistor->user_id }}</td>
                                            <td>{{ $vistor->product_id }}</td>
                                            <td>{{ $vistor->dateTime }}</td>
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
