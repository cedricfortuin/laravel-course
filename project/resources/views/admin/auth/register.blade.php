@extends('user.layout.index_layout')

@section('content')
    <form method="post" action="{{ route('register_button') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Naam</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <p>{{ $message }}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <p>{{ $message }}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <p>{{ $message }}</p>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Herhaal wachtwoord</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4 text-center">
                <button type="submit" class="btn btn-success col-md-12">
                    Registreren
                </button>
            </div>
        </div>
    </form>
@endsection
