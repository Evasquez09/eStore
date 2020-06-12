const mix = require('laravel-mix');

// Images
mix.copy('resources/images/*', 'public/images/');

// Public resources
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// Admin only resources
mix.js('resources/js/admin/app.js', 'public/js/admin')
    .sass('resources/sass/admin/app.scss', 'public/css/admin');
