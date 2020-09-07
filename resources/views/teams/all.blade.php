@extends('layouts.app')
@section('title', 'Teams')
@section('content')

@foreach ($teams as $team)
<div class="alert alert-primary">
<p>Team name: <a href="/teams/{{$team->id}}">{{$team->name}}</a></p>
<p>Team email: {{$team->email}}</p>
<p>Team adress: {{$team->adress}}</p>
<p>Team city: {{$team->city}}</p>


</div>
@endforeach

{{-- Dodati link na svaki tim da vodi na url “/teams/:id” --}}
@endsection