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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext');
    </style> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleAdmin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="col-md-2">
                <nav id="nav" class="text-center">

                    <div class="pt-4 pb-3">
                        <h1 id="logo">
                            <a href="{{ url('admin') }}">A. N.</a>
                        </h1>
                    </div>

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('PictureController@index') }}">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('AboutController@edit', 1) }}">O mnie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('ContactController@edit', 1) }}">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li> --}}
                    @endguest
                </nav>
            </div>
            <div class="col-md-10">
                <main class="container">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
