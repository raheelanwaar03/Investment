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

<body
    style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Payment Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row min-vh-100">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <div class="card bg-transparent border-light shadow-lg w-100">
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
                            </div>
                        @endif
                            <div class="card-title">
                                @forelse ($easyPaisas as $easyPaisa)
                                    <h5 class="text-center text-light mt-3">{{ $easyPaisa->text }}</h5>
                                    <h4 class="text-center text-light">Easypaisa Holder Name: {{ $easyPaisa->easy_name }}</h4>
                                    <h4 class="text-center text-light" >Easypaisa Account Number: {{ $easyPaisa->easy_num }}</h4>
                                @empty
                                @endforelse
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Store/Fees/Details') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px">Easypaisa Account Holder
                                                Name</b></label>
                                        <input type="text" name="bank_username"
                                            style="background: transparent;color:white " class="form-control"
                                            placeholder="Easypaisa Account Holder">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px" minlength="11">Easypaisa
                                                Number</b></label>
                                        <input type="number" name="sender_num"
                                            style="background: transparent;color:white " class="form-control"
                                            placeholder="Easypaisa Account Number">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:white"><b style="font-size: 25px">Put Trx or TID</b></label>
                                        <input type="text" style="background: transparent;color:white"
                                            name="tid" class="form-control" placeholder="Enter Your Trx or TID">
                                    </div>
                                    <button type="submit" class="btn btn-light text-success">Sumbit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
