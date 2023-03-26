@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Verification.Details') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="m-3" style="font-size:20px">Verfication Page
                                        Text</label>
                                    <input type="text" name="text" class="form-control"
                                        placeholder="Admin add Easypaisa Number">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">add</button>
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
                                            <th>Payment Page Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @forelse ($verificationText as $text)
                                                <td>{{ $text->text }}</td>
                                                <td><a href="{{ route('Admin.Edit.Verification.Details',['id'=>$text->id]) }}"
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
