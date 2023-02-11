@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{asset('assets/images/account-bg.jpg')}}">
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
                    <form action="{{ route('Store/Fees/Details') }}" method="POST" class="account-form">
                        @csrf
                        <div class="form-group">
                            <label for="sign-up">Select Bank</label>
                            <select name="bank" class="form-control">
                                <option value="easypaisa">Easypaisa</option>
                                <option value="jazzcash">Jazzcash</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="num" name="amount" placeholder="Please enter 670 pkr for account activation">
                        </div>
                        <div class="form-group">
                            <label for="">TRX or TID Num</label>
                            <input type="text" name="tid" placeholder="Enter TID or TRX num or Transcation">
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
