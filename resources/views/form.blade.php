<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            .container {
                width: 80%;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('submit') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label for="email">Number:</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="Number">
            </div>
            <div class="form-group">
                <label for="pwd">Detail:</label>
                <textarea name="detail" rows="3" class="form-control" placeholder="Detail"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    </body>
</html>
