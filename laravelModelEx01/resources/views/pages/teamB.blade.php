@extends('layouts.index')
@section('content')
<h1 class="text-center ">Liste de la team A qui vient de la faisal_DB , table team_b_s</h1>
{{-- {{$teamB}} --}}
@foreach ($teamB as $secondTeam )
<div>
<div class='flex justify-center'>
{{$secondTeam->nom}}
{{$secondTeam->prenom}}
</div>
</div>


@endforeach
@endsection
