@extends('layouts.index')
@section('content')
<div class="container">
    <form action="create" methode="POST">
        @csrf


      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <input type="submit" value="Submit">

    </form>
  </div>
@endsection
