@extends('layouts.index')
@section('content')
<table>
    <tr>
        <th>ID </th>
        <th>Name </th>
        <th>Lastname </th>
    </tr>
@foreach($members as $gens)
    <tr>
        <th>
            {{$gens->id}}
        </th>
        <th>
            {{$gens->firstname}}
        </th>
        <th>
            {{$gens->lastname}}
        </th>
    </tr>
@endforeach
</table>
@endsection
