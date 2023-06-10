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
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="custom-btn">Logout</button>
                        </form>
                    </li>
                </ul>
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
            @forelse ($products as $product)
                <div class="col-md-4">
                    <video controls="" src="{{ asset('images/' . $product->video) }}" width="300px" height="300px"></video>
                </div>
                @empty
                <h3>No Video uploaded yet!</h3> @endforelse
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
