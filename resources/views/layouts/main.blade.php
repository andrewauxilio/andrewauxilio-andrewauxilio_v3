<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
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
                        <router-link id="nav-link" class="nav-link" to="/">About</router-link>
                    </li>
                    <li class="nav-item active">
                        <router-link id="nav-link" class="nav-link" to="/projects">Projects</router-link>
                    </li>
                    <li class="nav-item active">
                        <router-link id="nav-link" class="nav-link" to="/resume">Resume</router-link>
                    </li>
                    <li class="nav-item active">
                        <router-link id="nav-link" class="nav-link" to="/blog">Blog</router-link>
                    </li>
                    <li v-if="isLoggedIn" class="nav-item active">
                        <router-link id="nav-link" class="nav-link" to="/dashboard">Dashboard</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>