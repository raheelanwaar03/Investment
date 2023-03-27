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
                            <h4 class="card-title">Edit Verification Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Verification.Details',['id'=>$verificationText->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="m-3" style="font-size:20px">Verfication Page
                                        Text</label>
                                    <input type="text" value="{{ $verificationText->text }}" name="text" class="form-control"
                                        placeholder="Admin add Easypaisa Number">
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
