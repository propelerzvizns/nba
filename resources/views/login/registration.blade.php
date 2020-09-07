@extends('layouts.app')
@section('title', 'Register')
@section('content')

<h1>Sign up</h1>
<div class="alert alert-secondary">
    <form method="POST" action="/registration">
        @csrf
    
    
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                    <div class="alert alert-danger">
                            {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('password') is-invalid @enderror" id="email" name="email">
                @error('email')
                    <div class="alert alert-danger">
                            {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input 

                type="password" 
                class="form-control  @error('password') is-invalid @enderror" 
                id="password" 
                rows="3" 
                name="password"></textarea>
                @error('password')
                    <div class="alert alert-danger">
                            {{$message}}
                    </div>
                @enderror
          
            </div>
    
            <div class="form-group">
                <label for="password_confirm">Confirm password</label>
                <input 

                type="password" 
                class="form-control @error('password_confirm') is-invalid @enderror" 
                id="password_confirm" 
                rows="3" 
                name="password_confirm"></textarea>
                @error('password_confirm')
                    <div class="alert alert-danger">
                            {{$message}}
                    </div>
                @enderror

           
            </div>

    
    
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
</div>
@endsection

{{-- Dodati registraciju korisnika. 
Prilikom registracije zahtevati polja: name, email, password i password_confirmation.
Pogledati na stranici validacije u dokumentaciji na koji način se postavlja validator za konfirmaciju polja --}}