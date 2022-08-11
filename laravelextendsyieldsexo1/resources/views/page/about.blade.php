<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about page</title>
</head>
<body>
@extends('layouts.index')
@section('content')
<div class="card" style="width: 18rem;">
    <img src="{{URL::asset('image/css.jpg')}}"  class="card-img-top" alt="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection


</body>
</html>





