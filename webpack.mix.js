const mix = require('laravel-mix');
var tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

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

mix.version();

mix.postCss('resources/sass/app.css', 'public/css', [ tailwindcss('./tailwind.js') ])
    .purgeCss();

mix.js('resources/js/app.js', 'public/js');
