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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('head')
    
    <title>{{ $title }}</title>
</head>

<body>
    @yield('particles')
    
    <!-- Navbar -->
    <div class="animated fadeIn slow">
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav outer shadow">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a id="nav-link" class="nav-link" href="{{ route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="{{ route('projects')}}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="{{ route('resume')}}">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link" class="nav-link" href="{{ route('blog')}}">Blog</a>
                    </li>
                    <li v-if="isLoggedIn" class="nav-item">
                        <a id="nav-link" class="nav-link" href="{{ route('dashboard')}}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')
    
    <div>
        <!-- Footer -->
        <footer class="animated fadeIn slow footer">
            <!-- Social Media Accounts --->
            <div class="container text-center w-50 mx-auto">
                <a href="https://github.com/andrewauxilio" target="_blank" class="fab fa-github"></a>
                <a href="https://www.facebook.com/andrewauxilio" target="_blank"
                    class="fab fa-facebook-f"></a>
                <a href="https://www.linkedin.com/in/andrewanthonyauxilio/" target="_blank"
                    class="fab fa-linkedin"></a>
                <a href="https://www.instagram.com/andrew.auxilio/" target="_blank"
                    class="fab fa-instagram"></a>
                <a href="#" class="fab fa-google"></a>
            </div>
        </footer>
    </div>
</body>

</html>