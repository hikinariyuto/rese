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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
        <header class="head">
        <h2>📄 Rese</h2>
        </header>

        <div class="main">
                            <div class="card-body">
                                <form class="login-form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="tytle">
                                    <p class="login">Registration</p>
                                    </div>

                                    <div class="username-box">
                                        👤
                                        
                                            <input class="username-input" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="Username" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        
                                    </div>

                                    <div class="email-box">
                                        💌
                                            <input class="email-input" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="Email" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="password-box">
                                        🔒
                                            <input class="password-input" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password" value="Password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="password-box">
                                        🔒
                                            <input class="password-input" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" required autocomplete="new-password" value="Password_confirmation">

                                            
                                    </div>

                                    <div class="login-box">
                                            <button type="submit" class="register-button">
                                                {{ __('登録') }}
                                            </button>
                                    </div>
                                </form>
                            </div>
                        
                    
</body>

</html>