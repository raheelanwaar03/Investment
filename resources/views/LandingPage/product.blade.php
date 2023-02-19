@extends('layouts.app')

@section('content')
    <section class="bg_img hero-section-2 left-bottom-lg-max"
        data-background="{{ asset('assets/images/about/hero-bg5.png') }}">
        <div class="container">
            <div class="hero-content text-white">
                <h1 class="title">Product</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('LandingPage') }}">Home</a>
                    </li>
                    <li>
                        Product
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-2">All Products</h1>
                    @forelse ($products as $product)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('images/' . $product->product_img) }}"
                                        alt="{{ $product->product_img }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->product_title }}</h5>
                                        <br>
                                        <h5 class="card-title">Price: {{ $product->product_price }}</h5>
                                        <p class="card-text">{{ $product->product_des }}</p>
                                        <div class="btn-group btn-group-lg">
                                            <div class="link">
                                                <a href="{{ $product->product_link }}" target="_blank" class="btn btn-sm btn-primary">Survey</a>
                                            </div>
                                            <div class="">
                                                <input type="text" style="width:0%;height:0%;color:white;border:none"
                                                    value="{{ route('LandingPage.Product', ['shareby' => auth()->user()->username], ['referal' => Auth::user()->username]) }}"
                                                    id="myInput">
                                                    <a onclick="copy()" class="btn btn-sm btn-success text-white">copy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>Admin have not added any product yet!</h3>
                    @endforelse
                    <div>
                        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
