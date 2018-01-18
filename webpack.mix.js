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

mix.js(['resources/assets/js/app.js'], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('node_modules/parsleyjs/dist/parsley.min.js', 'public/js/parsley.min.js')
   //.copy('node_modules/tinymce/')
   .styles(['public/css/app.css','node_modules/parsleyjs/src/parsley.css'],'public/css/app.css');
