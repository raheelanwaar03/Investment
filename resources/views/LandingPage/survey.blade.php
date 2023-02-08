@extends('auth.layout.app')

@section('content')
    <div class="account-section bg_img" data-background="{{ asset('assets/images/account-bg.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="#0" class="logo">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{ env('APP_NAME') }} Its just a litle survey about our products</h4>
                    <form action="#">
                        @csrf
                        <div class="form-group">
                            <label for="">First question</label>
                            <select name="question" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Second Question</label>
                            <select name="question1" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Go</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
