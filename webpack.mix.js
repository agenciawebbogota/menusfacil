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

mix.scripts([
  'resources/assets/inicio/js/axios.min.js',
  'resources/assets/inicio/js/materialize.min.js',
  'resources/assets/inicio/js/config.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/inicio/js/main.js',
], 'public/inicio/js/app.js')
   .styles([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/inicio/css/animate.min.css',
     'resources/assets/inicio/css/custom.css',
   ], 'public/inicio/css/app.css');


mix.scripts([
  'resources/assets/admin/js/sweetalert.min.js',
  'resources/assets/admin/js/materialize.min.js',
  'resources/assets/admin/js/moment-with-locales.min.js',
  'resources/assets/inicio/js/axios.min.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/admin/js/indexvue.js',
], 'public/admin/js/app.js')
   .styles([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/admin/css/main.css',
   ], 'public/admin/css/app.css');



mix.scripts([
  'resources/assets/inicio/js/materialize.min.js',
], 'public/sesion/js/app.js')
   .styles([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/sesion/css/login.css',
   ], 'public/sesion/css/app.css');



   mix.scripts([
  'resources/assets/inicio/js/axios.min.js',
  'resources/assets/registro/js/app.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/registro/js/registro.js',
], 'public/registro/js/app.js')
   .styles([
     'resources/assets/registro/css/app.css',
   ], 'public/registro/css/app.css');
