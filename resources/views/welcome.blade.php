<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

   
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="container">
        <div id="content">
            <div id="header">
                <h1>Biblioteca</h1>
            </div>
            <div id="auth">
                @if (Route::has('login'))
                    <nav>
                        <div style="display: flex; flex-direction:row;">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="auth-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="auth-link" style="margin-right:50px;">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="auth-link" style="margin-right:200px;">Register</a>
                                @endif
                            @endauth
                        </div>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
