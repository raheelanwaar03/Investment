@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if ($message = Session::get('massage'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Referal Setting</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Setting.update', $setting->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="" class="m-3">Edit Refer Amount</label>
                                    <input type="text" name="refer_amount" value="{{ $setting->refer_amount }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Edit Minimum Widthraw</label>
                                    <input type="text" name="minimum_amount" value="{{ $setting->minimum_amount }}"
                                        class="form-control" placeholder="Minimum Widthraw">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Edit Maximum Widthraw</label>
                                    <input type="text" name="maximun_amount" value="{{ $setting->maximun_amount }}"
                                        class="form-control" placeholder="Maximun Widthraw">
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
