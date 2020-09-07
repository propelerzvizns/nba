@extends('layouts.app')
@section('title', $player->first_name . ' ' . $player->last_name)
@section('content')
<div class="alert alert-primary">
    <p>Player name: {{$player->first_name}} {{$player->last_name}}</p>
    <p>Player email: {{$player->email}}</p>
    <p>Player team name: 
<a href="/teams/{{$player->team->id}}">
    {{$player->team->name}}

    </a></p>
</div>
@endsection