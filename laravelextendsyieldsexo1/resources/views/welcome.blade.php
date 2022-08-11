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
    <title>welcome</title>
</head>
<body>
    @extends('layouts.index')
    @section('content')
    <h3>Page Welcome</h3>
    @endsection
</body>
</html>
