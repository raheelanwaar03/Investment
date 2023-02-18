@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{asset('assets/images/account-bg.jpg')}}">
        <div class="container">
            <div class="account-title text-center">
                <a href="0#" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" height="150px" width="150px" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }}</h4>
                    <p>Please Pay(pkr:670) Your Registeration Fees For Account Activation</p>
                    <br>
                    @forelse ($easyPaisas as $easyPaisa)
                    <p>EasyPaisa Name:{{ $easyPasia->easy_name }}</p>
                    <br>
                    <p>EasyPaisa Number:{{ $easyPasia->easy_num }}</p>
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
