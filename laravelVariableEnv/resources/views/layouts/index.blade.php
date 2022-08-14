de.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <!-- Bootstrap CSS -->
            <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

            <!-- Bootstrap Bundle with Popper -->
            <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            
    <title>index Page</title>
</head>
<body>
@include('partial.header')
@yield('content')
@include('partial.footer')
</body>
</html>
