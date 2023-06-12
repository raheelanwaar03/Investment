<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
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
                            <a href="{{ route('User.Dashboard') }}" class="nav-link btn btn-primary">Dashboard</a>
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
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-transparent border-light shadow-lg w-100">
                    <div class="card-title">
                        <h2 class="text-center text-white my-3">Widthraw Balance</h2>
                        <h2 class="text-center text-white my-3">Your Balance: {{ auth()->user()->balance }}</h2>
                    </div>
                    <div class="card-body">
                        <x-alert/>
                        <form action="{{ route('User.Widthraw.Balance.Request') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mt-3" style="color:white;font-size:20px">Widthraw Amount</label>
                                <input type="num" name="widthraw_amount" class="form-control"
                                    placeholder="Enter Amount You want to widthraw" required>
                            </div>
                            <div class="form-group">
                                <label class="mt-3" style="color:white;font-size:20px">Account Holder Name</label>
                                <input type="num" name="widthraw_name" class="form-control"
                                    placeholder="Enter Account Holder Name" required>
                            </div>
                            <div class="form-group">
                                <label class="mt-3" style="color:white;font-size:20px">Account Number</label>
                                <input type="num" name="widthraw_num" class="form-control"
                                    placeholder="Enter Account Number" required>
                            </div>
                            <div class="form-group">
                                <label class="mt-3" style="color:white;font-size:20px">Select Bank</label>
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

<div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-lg w-100">
                        <div class="card-header">
                            <h4 class="text-center card-title">History</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="display" style="min-width: 845px">
                                    <thead class="">
                                        <tr class="">
                                            <th>Bank</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($widthraws as $widthraw)
                                            <tr class="">
                                                <td>{{ $widthraw->widthraw_bank }}</td>
                                                <td>{{ $widthraw->widthraw_amount }}</td>
                                                <td>{{ $widthraw->status }}</td>
                                                <td>{{ $widthraw->created_at }}</td>
                                            </tr> @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<footer>
    {{-- data table --}}

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
</footer>


</body>
</html>

{{-- <div class="row">
    <div class="col-xl-6 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="menu">
                    <span class="font-w500 fs-16 d-block mb-2 text-black">Total Balance</span>
                    <h2 class="text-black">{{ auth()->user()->balance }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="menu">
                    <span class="font-w500 fs-16 d-block mb-2 text-black">Widthrawal Balance</span>
                    <h2 class="text-black">{{ userWidthrawalBalance() }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="menu">
                    <span class="font-w500 fs-16 d-block mb-2 text-black">Pending Balance</span>
                    <h2 class="text-black">{{ userPendingBalance() }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-sm-12">
        <div class="text-center">
            <a href="{{ route('User.Widthraw.Request') }}" class="btn btn-primary">Widthraw</a>
        </div>
    </div>
</div> --}}
