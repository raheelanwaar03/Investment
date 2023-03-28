@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Your Earning</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center my-3">Widthraw Balance</h2>
                            <h2 class="text-center my-3">Your Balance: {{ auth()->user()->balance }}</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('User.Widthraw.Balance.Request') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Widthraw Amount</label>
                                    <input type="num" name="widthraw_amount" class="form-control"
                                        placeholder="Enter Amount You want to widthraw" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Account Holder Name</label>
                                    <input type="num" name="widthraw_name" class="form-control"
                                        placeholder="Enter Account Holder Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Account Number</label>
                                    <input type="num" name="widthraw_num" class="form-control"
                                        placeholder="Enter Account Number" required>
                                </div>
                                <div class="form-group">
                                    <label class="mt-3" style="font-size:20px">Select Bank</label>
                                    <select class="form-control" name="widthraw_bank">
                                        <option value="easypaisa">Easypaisa</option>
                                        <option value="jazzcash">Jazzcash</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mt-2">Procced</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
