<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Verification Page</title>
</head>

<body class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('LandingPage') }}" class="text-center">
                    <img src="#" alt="Logo">
                </a>
            </div>
        </div>
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="card border-black shadow-lg w-100">
                    <div class="card-title">
                        <h2 class="text-center mt-3">Verification</h2>
                    </div>
                    <div class="card-body">
                        @forelse ($verificationText as $text)
                        <p class="text-center text-dark" style="font-size:30px;font-family:verdana;">
                        {{$text->text}}
                        </p>
                        @empty
                            <h4>Admin have not entered any text yet!</h4>
                        @endforelse
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('LandingPage') }}" class="btn btn-outline-success">Main Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
