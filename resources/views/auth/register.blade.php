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
                <h1 class="text-center text-light">Register New Account</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="card bg-transparent border-light shadow-lg w-100">
                        <div class="card-body">
                            <x-alert/>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">User Name</b></label>
                                    <input type="text" name="name" style="background: transparent;color:white "
                                        class="form-control" placeholder="Enter Your Name" required>
                                </div>
                                <span>
                                    @error('name')
                                       <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Email</b></label>
                                    <input type="text" style="background: transparent;color:white " name="email"
                                        class="form-control" placeholder="Enter Your Email" required>
                                </div>
                                <span>
                                    @error('email')
                                        <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Phone</b></label>
                                    <input type="number" style="background: transparent;color:white " name="phone"
                                        class="form-control" placeholder="Enter Your Phone">
                                </div>
                                <span>
                                    @error('phone')
                                        <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Address</b></label>
                                    <input type="text" style="background: transparent;color:white" name="address"
                                        class="form-control" placeholder="Enter Your Address">
                                </div>
                                <span>
                                    @error('address')
                                        <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Password</b></label>
                                    <input type="password" style="background: transparent;color:white " name="password"
                                        class="form-control" placeholder="Enter Your Password" required minlength="8"
                                        maxlength="12">
                                </div>
                                <span>
                                    @error('password')
                                        <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Confirm Password</b></label>
                                    <input type="password" style="background: transparent;color:white "
                                        name="password_confirmation" class="form-control"
                                        placeholder="Enter Your Confirm Password" required minlength="8"
                                        maxlength="12">
                                </div>
                                <span>
                                    @error('password_confirmation')
                                        <div class="text-white">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <label style="color:white"><b style="font-size: 25px">Referal</b></label>
                                    <input type="text" name="referal" value="{{ $referal }}"
                                        class="form-control text-dark" readonly>
                                </div>
                                <button type="submit" class="btn btn-success">Enroll</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Already have account?<span><a href="{{ route('login') }}"
                            style="text-decoration: none;" class="btn btn-light text-success  btn-lg"> Sign
                            in </a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
