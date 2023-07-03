const mix = require('laravel-mix');

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .vue();
