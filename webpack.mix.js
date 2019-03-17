const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/menu.js', 'public/js')
mix.js('resources/js/instagram.js', 'public/js')
mix.js('resources/js/membre.js', 'public/js')
mix.js('resources/js/carousel-bootstrap.js', 'public/js')
mix.js('resources/js/shop.js', 'public/js')
mix.js('resources/js/bootstrap.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
