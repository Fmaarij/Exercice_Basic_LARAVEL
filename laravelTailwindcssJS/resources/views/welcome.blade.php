@extends('layouts.index')
@section('content')
<div class="allWecomePage mx-20 ">
    <h1 class="mt-3 mb-3">Welcome subheading</h1>

<div class=" bg-gray-200 text-slate-600 px-3">
    <h1 class="mt-3 mb-3"><a href="home">Home</a> / {{$name}}</h1>

</div>
<p class="mt-2 "> {{url()->current()}}
</p>


<div class="p-6  bg-gray-200 text-slate-600 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hello CoddingSchool</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        About

    </a>
</div>
    <div class="text-center text-xs mt-3 mb-3">
        <h4>BONUS:</h4>
        <p>Url actuelle: {{url()->current()}}</p>
        <p>Url precédent: {{url()->previous()}}</p>

    </div>
</div>
<script src="{{url('js/perso.js')}}"></script>

@endsection
