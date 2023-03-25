<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Payment Page</title>
</head>

<body style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">Payment Page</h1>
            </div>
        </div>
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-title">
                        @forelse ($paymentText as $text)
                        <p class="text-center mt-3">{{ $text->text }}</p>
                        <h4 class="text-center">Easypaisa Holder Name: ({{ $text->holder }})</h4>
                        <h4 class="text-center">Easypaisa Account Number: ({{ $text->account_num }})</h4>
                        @empty

                        @endforelse
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Store/Fees/Details') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Easypaisa Account Holder Name</b></label>
                                <input type="text" name="bank_username" style="background: transparent;color:black "
                                    class="form-control" placeholder="Easypaisa Account Holder">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Easypaisa Number</b></label>
                                <input type="number" name="sender_num" style="background: transparent;color:black "
                                    class="form-control" placeholder="Easypaisa Account Number">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Put Trx or TID</b></label>
                                <input type="text" style="background: transparent;color:black " name="tid"
                                    class="form-control" placeholder="Enter Your Phone">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Sumbit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>





@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{asset('assets/background.jpg')}}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ route('LandingPage') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }}</h4>
                    <p>Please Pay(pkr:670) Your Registeration Fees For Account Activation</p>
                    @forelse ($easyPaisas as $easyPaisa)
                    <p>EasyPaisa Name: {{ $easyPaisa->easy_name }}</p>
                    <p>EasyPaisa Number: {{ $easyPaisa->easy_num }}</p>
                    @empty
                        <h4>No Account Added yet</h4>
                    @endforelse
                    <form action="{{ route('Store/Fees/Details') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Our Bank</label>
                            <input type="text" name="bank" value="Easypaisa" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Enter Your Username</label>
                            <input type="text" name="bank_username" placeholder="Your bank's username">
                        </div>
                        <div class="form-group">
                            <label for="">Sender Number</label>
                            <input type="number" name="sender_num" placeholder="Your number from where you sent registeration fees">
                        </div>
                        <div class="form-group">
                            <label for="">TRX or TID Num</label>
                            <input type="text" name="tid" placeholder="Enter TID or TRX num or Transcation" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="mt-2 mb-2">Procced</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
