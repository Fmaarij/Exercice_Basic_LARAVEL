<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fruit page</title>
</head>
<body>
    @extends('layouts.index')
    @section('content')
    @foreach ($tabFruit as $fruit)
    <p>{{ $fruit }}</p>
    @endforeach
    @endsection
</body>
</html>
