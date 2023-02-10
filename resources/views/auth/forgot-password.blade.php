@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{ asset('assets/images/account-bg.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span
                            class="d-none d-sm-inline-block">To {{ env('APP_NAME') }}</span></span></a>
                <a href="#0" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Forgot Your Password Don't worry we are here to help you!</h4>
                    <form action="{{ route('password.email') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Your Working Email </label>
                            <input type="text" placeholder="Give Us Your Working Email " id="sign-up" name="email">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Email Password Reset Link</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>Note</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mb-30 mt-2">Give us your working email for getting Password reset link.</span>
                    <span class="d-block mt-15">Don't have an account? <a href="{{ route('register') }}">Sign Up Here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
