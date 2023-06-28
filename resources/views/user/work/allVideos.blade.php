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

    <x-alert/>

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: rgb(86,61,124)">
                    <a href="{{ route('User.Dashboard') }}" class="text-center">
                        <div style="float:left;">
                            <img src="{{ asset('assets/logo.png') }}" alt="" height="80px" width="80px">
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row m-3">
            @forelse ($allVideos as $video)
                <div class="col-md-4">
                    <a href="{{ route('User.Work', ['id' => $video->id]) }}" class="text-decoration-none card_css">
                        <div class="card" style="background-color: rgb(86,61,124);">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-play" style="font-size:25px;"></i>
                                </div>
                                <h5 class="text-decoration-none text-center">{{ $video->text }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <h3>No Video uploaded yet!</h3> @endforelse
        </div>
    </div>
    <div class="container">
    <div class="row m-3">

    </div>
    </div>

    </body>

</html>
