<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Site</title>
    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}">
    <link rel="stylesheet" href="{{url(mix('site/css/bootstrap.css'))}}">
</head>
<body>
    <div class="container my-5 align-center">

        @yield('content')

    </div>

    <script src="{{url(mix('site/js/script.js'))}}"></script>
    <script src="{{url(mix('site/js/jquery.js'))}}"></script>
    <script src="{{url(mix('site/js/bootstrap.js'))}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    @yield('script')
</body>
</html>
