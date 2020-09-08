@extends('layouts.app')
@section('title', $team->name)
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
    <div class="alert alert-dark">
        <form method="POST" action="/comment">
        @csrf

            <div class="form-group">
                <div class="form-group">

                    <input type="hidden" id="custId" name="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" id="custId" name="team_id" value="{{$team->id}}">
                    <label for="content">Add comment</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3" name="content"></textarea>
                    @error('content')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

        @foreach($team->comments as $comment)
        <div class="alert alert-dark">
           <h4>comment: {{$comment->content}}</h4>
            <p >created at:{{$comment->created_at}}</p>


</div>

        @endforeach


</div>


@endsection

{{-- Napraviti stranicu pojedinačnog tima na url-u “/teams/:id”
 gde će se prikazivati podaci o tom timu (ime, email, adresa, grad) i lista igrača tog tima --}}
