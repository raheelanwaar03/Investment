<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily survey</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body class="bg-primary">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-title">
                        <h1 class="text-center text-primary">Litle Survey</h1>
                    </div>
                    <div class="card-body">
                        <hr>
                        <div class="text-center" style="font-size:26px">
                            Please share your experince with us that how you felt working with us!
                            <br>
                            Only Few Question
                        </div>

                        <form action="#">
                            @csrf
                            <div class="form-group">
                                <label for="">You like our our Work</label>
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
    </div>



</body>

</html>
