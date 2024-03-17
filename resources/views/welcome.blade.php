<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img src="img/logo_small.png" alt="Disha Compuworld">
                        </div>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
    
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                                @if (Route::has('login'))
                                    
                                        @auth
                                            <li class="nav-item">
                                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li class="nav-item"> 
                                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                                            </li>
                                            @endif
                                        @endauth
                                   
                                @endif
                        </ul>
                    </div>
                </div>
            </nav>              
        </div>
    
        <main>
            <div class="container h-100 p-5">
                <div>
                    <div>test</div>
                </div>
           </div>
        </main>

        <footer>
            <div class="container align:center">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
            
        </footer>
    </body>
</html>
