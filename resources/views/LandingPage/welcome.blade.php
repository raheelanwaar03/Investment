<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body style="background-image: url({{ asset('assets/img/bg/bg1.jpg') }});">
    <div class="container">
        <div class="row w-100">
            <div class="col-12 p-4">
                <div class="nav d-flex justify-content-center">
                    @if (auth()->user())
                    <div class="">
                        <div class="mb-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="custom-btn">Logout</button>
                            </form>
                        </div>
                        <div class="">
                            <a href="{{ route('User.Dashboard') }}" class="nav-link"><img style="border:1px solid rgb(176, 135, 236)" src="{{ asset('assets/logo.png') }}" height="100px" width="100px"></a>
                        </div>
                    </div>
                    @else
                    <ul class="nav flex-column">
                    <li class="nav-item">
    <a class="nav-link custom-btn m-3" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link custom-btn m-1" href="{{ route('register') }}">Register</a>
    </li>
</ul> @endif
    </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row m-3">
        <div class="col-sm-12 d-flex justify-content-center align-items-center">
            <div class="col-sm-4">
                <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                    <div class="card" style="background-color: rgb(86,61,124);">
                        <div class="card-body home_card">
                            <div class="text-center">
                                <i class="fa-solid fa-money-bill-transfer" style="font-size:25px;"></i>
                            </div>
                            <h5 class="text-decoration-none text-center">Widthraw</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                    <div class="card" style="background-color: rgb(86,61,124);">
                        <div class="card-body home_card">
                            <div class="text-center">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-decoration-none text-center">Team</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                    <div class="card" style="background-color: rgb(86,61,124);">
                        <div class="card-body home_card">
                            <div class="text-center">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-decoration-none text-center">Guide</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-address-book" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Rules</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-newspaper" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">News</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-play" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Watch Video</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-house-circle-exclamation" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">About Us</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-comment-dots" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Feed Back</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('User.Dashboard') }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body home_card">
                                <div class="text-center">
                                    <i class="fa-solid fa-hashtag" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">Instagram</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: rgb(86,61,124)">
                    <a href="{{ route('LandingPage') }}" class="text-center">
                        <div style="float:left;">
                            <i class="fa-solid fa-door-open" style="color:white;font-size:60px;"></i>
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </body>

</html>
