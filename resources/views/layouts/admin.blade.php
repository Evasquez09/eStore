<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | Admin</title>

        <!-- Scripts -->
        <script src="{{ asset('js/admin/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">

        <link rel="icon" href="{{ asset('images/icon-300x300.png') }}" type="image/png" sizes="300x300">
    </head>
    <body>
        <div id="app">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <router-link to="/" class="navbar-item">
                        <img src="{{ asset('images/estore-logo-1000x292.png') }}" height="28">
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
                        <router-link to="/admin2" class="navbar-item">Go to Bar</router-link>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-light" href="{{ route('home') }}">
                                Public Site
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="section">
                <div class="container">
                    @yield('content')
                </div>
            </section>
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
