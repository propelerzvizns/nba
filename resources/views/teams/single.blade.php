@extends('layouts.app')
@section('title', 'Teams')
@section('content')

<div class="alert alert-primary">
    <p>Team name: {{$team->name}}</p>
    <p>Team email: {{$team->email}}</p>
    <p>Team adress: {{$team->adress}}</p>
    <p>Team city: {{$team->city}}</p>
    <div class="alert alert-dark">
    @foreach ($team->players as $player)
   
      <p>Player name: <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></p>

    @endforeach
  </div>
</div>


@endsection

{{-- Napraviti stranicu pojedinačnog tima na url-u “/teams/:id”
 gde će se prikazivati podaci o tom timu (ime, email, adresa, grad) i lista igrača tog tima --}}