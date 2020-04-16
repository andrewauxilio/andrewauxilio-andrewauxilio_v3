<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/main/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main/404.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div id="app">
        <router-view />
    </div>

    <div id="body" class="bg-purple">
        <div class="stars">
            <div class="central-body">
                <img class="image-404" src="{{ asset('images/404/404.svg') }}" width="300px" />
                <a href="{{ route('about')}}" class="btn-go-home">GO BACK HOME</a>
            </div>
            <div class="objects">
                <img class="object_rocket" src="{{ asset('images/404/rocket.svg') }}" width="40px" />
                <div class="earth-moon">
                    <img class="object_earth" src="{{ asset('images/404/earth.svg') }}" width="100px" />
                    <img class="object_moon" src=""{{ asset('images/404/moon.svg') }}" width="80px" />
                </div>
                <div class="box_astronaut">
                    <img class="object_astronaut" src="{{ asset('images/404/astronaut.svg') }}" width="140px" />
                </div>
            </div>
            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
            </div>
        </div>
    </div>
  
</body>

</html>
