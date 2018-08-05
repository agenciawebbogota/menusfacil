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

mix.js([
  'resources/assets/inicio/js/config.js',
  'resources/assets/inicio/js/materialize.min.js',
  'resources/assets/inicio/js/axios.min.js',
  'resources/assets/inicio/js/main.js',
  'resources/assets/inicio/js/vue.js',
], 'public/inicio/js/app.js')
   mix.css([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/inicio/css/custom.css',
   ], 'public/inicio/css/app.css');
