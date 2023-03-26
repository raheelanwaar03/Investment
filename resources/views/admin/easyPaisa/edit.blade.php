@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Payment Page Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Easypaisa.update', $easyPaisa->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="" class="m-3">Payment Page Text</label>
                                    <input type="text" name="text" value="{{ $easyPaisa->text }}" class="form-control" placeholder="Admin add Easypaisa Number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Easypaisa Account Number</label>
                                    <input type="number" name="easy_num" value="{{ $easyPaisa->easy_num }}" class="form-control" placeholder="Admin add Easypaisa Number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Easypaisa Holder Name</label>
                                    <input type="text" name="easy_name" value="{{ $easyPaisa->easy_name }}" class="form-control" placeholder="Easypaisa Username">
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
