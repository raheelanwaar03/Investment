@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">{{ auth()->user()->name }} Welcome to User Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Total Balance</span>
                                        <h2>{{ auth()->user()->balance }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Widthrawal Balance</span>
                                        <h2>{{ userWidthrawalBalance() }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Total Refer's</span>
                                        <h2>{{ totalReferal() }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Pending Balance</span>
                                        <h2>{{ userPendingBalance() }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-12">
                            <div class="card">
                                <div class="card-title">
                                    <h3 class="text-center mt-3">Your Refer Link</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="{{ route('register', ['referal' => Auth::user()->name]) }}"
                                            id="myInput" readonly>
                                    </div>
                                    <button onclick="copy()" class="btn btn-secondary mt-2">copy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
