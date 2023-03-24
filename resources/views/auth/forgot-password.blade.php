<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body
    style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">

    <x-alert/>

    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center text-success">Request for Password Reset Link</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.email') }}" method="POST" class="account-form">
                            @csrf
                            <div class="form-group">
                                <label> <b>Your Working Email </b></label>
                                <input type="text" class="form-control" placeholder="Give Us Your Working Email "
                                    id="sign-up" name="email">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Email Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-success">
                        <div class="account-header pb-0">
                            <span class="d-block mb-30 mt-2" style="font-size:20px;color:white">Give us your working
                                email for getting Password reset
                                link.</span>
                            <span class="d-block mt-15" style="font-size:20px;color:white">Don't have an account? <a
                                    href="{{ route('register') }}" style="color:chartreuse"> <b>Sign Up Or<span><a
                                        style="color:chartreuse" href="{{ route('login') }}"> Sign
                                                In</a></span></a></span> </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="account-section bg_img" data-background="{{ asset('assets/background.jpg') }}">
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
                    <h4 class="title mb-20">Forgot Your Password Don't worry we are here to help you!</h4>
                    <form action="{{ route('password.email') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Your Working Email </label>
                            <input type="text" placeholder="Give Us Your Working Email " id="sign-up"
                                name="email">
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
                    <span class="d-block mt-15">Don't have an account? <a href="{{ route('register') }}">Sign Up
                            Here</a></span>
                </div>
            </div>
        </div>
    </div> --}}
</body>

</html>
