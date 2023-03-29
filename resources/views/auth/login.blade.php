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
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Login New Account</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">

                @if ($message = Session::get('massage'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div
                @endif

                    <div class="card bg-transparent border-light shadow-lg w-100">
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Email</b></label>
                                    <input type="text" style="background: transparent;color:white " name="email"
                                        class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Password</b></label>
                                    <input type="password" style="background: transparent;color:white " name="password"
                                        class="form-control" placeholder="Enter Your Password">
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Have not register yet?<span><a href="{{ route('register') }}"
                            style="text-decoration: none;" class="btn btn-light text-success btn-lg">Register Now!</a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
