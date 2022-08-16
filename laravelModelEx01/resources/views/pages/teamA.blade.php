@extends('layouts.index')
@section('content')
{{-- <h1>{{$teamA}}</h1> --}}
<h1 class="text-center ">Liste de la team A qui vient de la faisal_DB , table team_a_s</h1>
@foreach ($teamA as $faisal)
{{-- <h1>{{$faisal->id}}</h1> --}}
<div class="flex justify-center">
    <div>
        {{$faisal->nom}}
        {{$faisal->prenom}}
    </div>
<div>
    {{$faisal->created_at}}
    {{$faisal->updated_at}}
</div>

</div>
@endforeach
@endsection




