@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{ asset('assets/background.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }}</h4>
                    <form action="{{ route('password.update') }}" method="POST" class="account-form">
                        @csrf
                        @method('put')
                        <input type="hidden" name="token"
                        value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <label for="sign-up">Your Email </label>
                            <input type="email" placeholder="Enter Your Email " id="sign-up" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pass">New Password</label>
                            <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="form-group">
                            <label for="pass">Confirm Password</label>
                            <input type="password" placeholder="Enter Your Password" id="pass"
                                name="password_confirmation">
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mt-15">Don't have an account? <a href="{{ route('register') }}">Sign Up Here</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection

