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
    <!--=======Banner-Section Ends Here=======-->

    <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-2">All Products</h1>
                    @foreach ($products as $product)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('images/' . $product->product_img) }}"
                                        alt="{{ $product->product_img }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->product_title }}</h5>
                                        <p class="card-text">{{ $product->product_des }}</p>
                                        <a href="#">share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
