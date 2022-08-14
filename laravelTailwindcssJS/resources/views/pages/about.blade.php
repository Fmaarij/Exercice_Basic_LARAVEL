@extends('layouts.index')
@section('content')
<div class="allWecomePage mx-20 ">
<h1 class="mt-3 mb-3">Services subheading</h1>
<div class=" bg-gray-200 text-slate-600 px-3">
    <h1 class="mt-3 mb-3"><a href="home">Home</a> / {{$name}}</h1>
</div>

<div class="p-6  bg-gray-200 text-slate-600 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
    <p class=" mb-3 font-normal text-gray-700 dark:text-gray-400">1200 X 300</p>
</div>

<div class="toisCards flex justify-between mt-3 mb-3">
    <div class="p-6 bg-gray-200  text-slate-600 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">750 X 450</p>

    </div>
    <div class="p-6  text-slate-600 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">About modern school</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

    </div>

</div>
</div>
@endsection
