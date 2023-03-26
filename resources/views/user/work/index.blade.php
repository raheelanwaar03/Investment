@extends('user.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-md-4">
                        <div class="card mt-2">
                            <img class="card-img-top" src="{{ asset('images/' . $product->product_img) }}"
                                alt="{{ $product->product_img }}">
                            <div class="card-body">
                                <form action="{{ route('User.Type.Task',['id'=>$product->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="user_text" class="form-control" placeholder="Enter the Text mentioned in above image">
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-sm btn-primary mt-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
            </div>
            <div class="col-md-6">
                <h3>Admin have not added any product yet!</h3>
            </div>
            @endforelse
            <div>
                <div class="row">
                    <div class="col-md-12">
                        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
