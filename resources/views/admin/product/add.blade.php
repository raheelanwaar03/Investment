@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title">
                            Add New Tasks
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="m-3">Price</label>
                                    <input type="text" name="product_price" class="form-control"
                                        placeholder="Add Task Price">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Level</label>
                                    <input type="text" name="product_level" class="form-control"
                                        placeholder="Add Task Level">
                                </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Product Image</label>
                                    <input type="file" name="product_img" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    {{-- <div class="card">
        <div class="card-header">
            <h4 class="card-title">Set limite Referal Commission</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('Admin.Setting.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="mt-2">User Minimum Widthraw</label>
                    <input type="number" name="minimum_amount" class="form-control"
                        placeholder="Enter User Referal commission">
                </div>
                <div class="form-group">
                    <label class="mt-2">User Maximum Widthraw</label>
                    <input type="number" name="maximun_amount" class="form-control"
                        placeholder="Enter User Referal commission">
                </div>
                <div class="form-group">
                    <label class="mt-2">Referal Commission</label>
                    <input type="number" name="refer_amount" class="form-control"
                        placeholder="Enter User Referal commission">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
            </form>
        </div>
    </div> --}}


