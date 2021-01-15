<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ config('app.name') }}</title>

    @include('sweetalert::alert')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand mx-5 text-white" href="{{ route('index') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarText">
        <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="{{ route('admin.index') }}">ToDo lijst - (voor admin)</a>
                </li>
            @endauth
        </ul>
        <span class="navbar-text mx-5">
          @guest
            <a class="nav-item text-white mx-3" href="{{ route('login') }}">Login</a>
            <a class="nav-item text-white mx-3" href="{{ route('register') }}">Registreren</a>
          @endguest
          @auth
              <a class="nav-link text-white" href="">Hoi [naam ingelogd]</a>
          @endauth
    </span>
    </div>
</nav>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            @yield('content')
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
