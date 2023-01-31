@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="assets/images/account-bg.jpg">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span
                            class="d-none d-sm-inline-block">To {{ env('APP_NAME') }}</span></span></a>
                <a href="#0" class="logo">
                    <img src="assets/images/logo/footer-logo.png" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }}</h4>
                    <form action="{{ route('register') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Your Name </label>
                            <input type="text" placeholder="Enter Your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Email </label>
                            <input type="text" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Phone </label>
                            <input type="text" placeholder="Enter Your Phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="sign-up">Your Country </label>
                            <input type="text" placeholder="Enter Your Country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Enter Your Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="pass">Confirm Password</label>
                            <input type="password" placeholder="Re-type Password" name="password_confirmation">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mt-15">Already have an account? <a href="{{ route('login') }}">Sign In
                            Here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
