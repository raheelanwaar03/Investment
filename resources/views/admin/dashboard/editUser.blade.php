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
                            <form action="{{ route('Admin.Update.User',['id'=>$user->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="ml-2">Name</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="ml-2">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="ml-2">Level</label>
                                    <input type="text" name="level" value="{{ $user->level }}" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label for="" class="ml-2">Balance</label>
                                    <input type="text" name="balance" value="{{ $user->balance }}" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
