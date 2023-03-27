@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Easypaisa.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="m-3" style="font-size:20px">Payment Page Text</label>
                                    <input type="text" name="text" class="form-control"
                                        placeholder="Admin add Easypaisa Number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3" style="font-size:20px">Easypaisa Account
                                        Number</label>
                                    <input type="number" name="easy_num" class="form-control"
                                        placeholder="Admin add Easypaisa Number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3" style="font-size:20px">Easypaisa Holder
                                        Name</label>
                                    <input type="text" name="easy_name" class="form-control"
                                        placeholder="Easypaisa Username">
                                </div>
                                <button type="submit" class="btn btn-primary">add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Applied Limite</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Easypaisa Holder Name</th>
                                            <th>Easypaisa Account Number</th>
                                            <th>Payment Page Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @forelse ($easyPaisas as $easyPaisa)
                                                <td>{{ $easyPaisa->easy_name }}</td>
                                                <td>{{ $easyPaisa->easy_num }}</td>
                                                <td>{{ $easyPaisa->text }}</td>
                                                <td><a href="{{ route('Admin.Easypaisa.edit', $easyPaisa->id) }}"
                                                        class="btn btn-sm btn-primary">Edit Details</a></td>
                                            @empty
                                                <h4 class="text-center">No Limite Applied Yet</h4>
                                            @endforelse
                                        </tr>
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
