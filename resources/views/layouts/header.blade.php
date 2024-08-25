<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> --}}
    <title>{{ env('APP_NAME') }}</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
</head>

<body class="w3-light-grey">
    <!-- Navbar (sit on top) -->
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="w3-top">
            <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
                <a href="/" class="w3-bar-item w3-button">Home</a>
                <a href="/dashboard" class="w3-bar-item w3-button">Projects</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
                <!-- Right-sided navbar links. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="w3-bar-item w3-button">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="w3-bar-item w3-button">
                                    Log
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="w3-bar-item w3-button">
                                        Reg
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Header -->
        <div class="w3-container w3-center w3-padding-32">
            <div class="w3-container w3-center w3-padding-32">
                <h1><b>MY PORTFOLIO</b></h1>
                <p>Welcome! You are on pages developed in PHP, <span class="w3-tag">Laravel framework
                        !</span></p>
            </div>
        </div>

        <!-- Content -->
