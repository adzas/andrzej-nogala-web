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

    <!-- ajax -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleGuest.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="container-fluid">
            
            <img class="myPicture" src="{{ asset('img/profil.jpg') }}" alt="Andrzej Nogala Picture" />
    
            <h3 class="titleSection" onclick="moveTitle()">
                Andrzej Nogala
            </h3>

            <p class="navbar">
                <a href="#" onclick="changeContent('about')" data-content="about" class="navbarlinks">O mnie</a>
                <span class="separator"> | </span>
                <a href="#" onclick="changeContent('gallery')" data-content="gallery" class="navbarlinks">Galeria</a>
                <span class="separator"> | </span>
                <a href="#" onclick="changeContent('contact')" data-content="contact" class="navbarlinks">Kontakt</a>
            </p>

            <p class="contentSection">
                ...
            </p>
            
    
            {{-- Modal --}}
            <div class="pictureModal" onclick="hiddenModal()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contentImg">
                            {{-- <img class='img' src="../storage/app/example/5lFDomRaOXgLmyL46NDIbi1koyQ62S5MDsAfk9CM.jpeg"> --}}
                            <img class='img' src="">
                            {{-- style="background-image: url(../storage/app/example/5lFDomRaOXgLmyL46NDIbi1koyQ62S5MDsAfk9CM.jpeg)" --}} 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="modalDescription">
                            <h6 class="pictureTitle">Tytuł obrazka</h6>
                            <p class="pictureDescription">Opis obrazka coś tam trzeba napisać i wyświetlić. No trudno.</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            

        </main>
    </div>
    <!-- My Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
