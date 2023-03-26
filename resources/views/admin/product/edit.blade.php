@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center">Edit Task Details</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Product.update', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="" class="m-3">Price</label>
                                    <input type="text" name="product_price" class="form-control" value="{{ $product->product_price }}"
                                        class="form-group">
                                </div>
                                    <div class="form-group">
                                        <label for="" class="m-3">Level</label>
                                        <input type="text" name="product_level" class="form-control" value="{{ $product->product_level }}" class="form-group">
                                        </div>
                                <div class="form-group">
                                    <label for="" class="m-3">Product Image</label>
                                    <input type="file" name="product_img" class="form-control">
                                </div>
                                <div class="my-3">
                                    <img src="{{ asset('images/' . $product->product_img) }}" alt="product img" width="200px"
                                        height="200px">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection



