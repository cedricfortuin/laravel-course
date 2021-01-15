@extends('user.layout.index_layout')

@section('content')
    <div class="text-center">
        <form action="{{ route('login_button') }}" method="post">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Email</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">&#64;</div>
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="inlineFormInputGroup" value="{{ old('name') }}" name="name" placeholder="Email">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">Wachtwoord</label>
                    <input type="text" class="form-control mb-2 @error('password') is-invalid @enderror" id="inlineFormInput" name="password" placeholder="Wachtwoord">
                </div>
                <div class="col-auto">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                            Onthoud mij
                        </label>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
