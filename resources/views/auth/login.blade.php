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
                    <form action="{{ route('login') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Your Email </label>
                            <input type="text" placeholder="Enter Your Email " id="sign-up" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                            <span class="sign-in-recovery">Forgot your password? <a href="#0">recover
                                    password</a></span>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Sign In</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mb-30 mt-2">Sign up with your work email</span>
                    <span class="d-block mt-15">Don't have an account? <a href="{{ route('register') }}">Sign Up Here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
