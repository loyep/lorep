let mix = require('laravel-mix');

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

mix.js('resources/assets/app/js/app.js', 'public/js/app.js')
    .js('resources/assets/dashboard/js/app.js', 'public/js/dashboard.js')
    .sass('resources/assets/app/sass/app.scss', 'public/css/app.css')
   .sass('resources/assets/dashboard/sass/app.scss', 'public/css/dashboard.css');
