@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{ asset('assets/background.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span
                            class="d-none d-sm-inline-block">To {{ env('APP_NAME') }}</span></span></a>
                <a href="{{ route('LandingPage') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px"
                        alt="logo">
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
                            <span class="sign-in-recovery">Forgot your password? <a
                                    href="{{ route('password.request') }}">recover
                                    password</a></span>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
