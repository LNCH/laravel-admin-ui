let mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'dist/css');

mix.js('resources/js/app.js', 'dist/js');