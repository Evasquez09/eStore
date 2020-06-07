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

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <router-link to="/" class="navbar-item">
                        <strong>{{ config('app.name') }}</strong>
                        <!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
                    </router-link>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <router-link to="/" class="navbar-item">Home</router-link>
                        <router-link to="/bar" class="navbar-item">Go to Bar</router-link>
                    </div>
                </div>
            </nav>


            @yield('content')

        </div>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>{{ config('app.name') }}</strong> by <a href="http://davidzapata.tech">David Zapata</a>. Licensed
                    under <a href="https://choosealicense.com/licenses/gpl-3.0/">GNU GPLv3</a>.
                </p>
            </div>
        </footer>
    </body>
</html>
