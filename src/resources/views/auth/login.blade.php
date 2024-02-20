<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="head">
        <h2>📄 Rese</h2>
    </header>
    <div class="main">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="tytle">
                <p class="login">{{ __('Login') }}</p>
            </div>
            <div class="email-box">
                💌
                <input class="email-input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="Email" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="password-box">
                🔒
                <input class="password-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="login-box">
                <button class="login-button" type="submit">{{ __('ログイン') }}</button>
            </div>
        </form>
    </div>
</body>
</html>