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
    <link href="{{ asset('css/styleGuest.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="container">
            
            <img class="myPicture" src="{{ asset('img/profil.jpg') }}" alt="Andrzej Nogala Picture" />
    
            <h3 class="titleSection"></h3>

            <p class="navbar">
                <a href="#" class="navbarlinks" data-where="about">O mnie</a>
                <span class="separator"> | </span>
                <a href="#" class="navbarlinks" data-where="gallery">Galeria</a>
                <span class="separator"> | </span>
                <a href="#" class="navbarlinks" data-where="contact">Kontakt</a>
            </p>

            <p class="contentSection d-none">
                Elementum hendrerit sollicitudin felis lacus scelerisque proin elit cursus erat
                felis ipsum sit a nec suspendisse scelerisque felis 
                tortor euismod leo fusce tempus sed nulla.
            </p>
            

        </main>
    </div>
    <!-- My Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
