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

mix.babel([
  'resources/assets/inicio/js/axios.min.js',
  'resources/assets/inicio/js/materialize.min.js',
  'resources/assets/inicio/js/config.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/inicio/js/app.js',
], 'public/inicio/js/app.min.js')
   .babel([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/inicio/css/animate.min.css',
     'resources/assets/inicio/css/custom.css',
   ], 'public/inicio/css/app.min.css');

// admin
mix.babel([
  'resources/assets/admin/js/sweetalert.min.js',
  'resources/assets/admin/js/materialize.min.js',
  'resources/assets/admin/js/moment-with-locales.min.js',
  'resources/assets/inicio/js/axios.min.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/admin/js/indexvue.js',
], 'public/admin/js/app.min.js')
   .babel([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/admin/css/main.css',
   ], 'public/admin/css/app.min.css');

mix.babel([
  'resources/assets/inicio/js/materialize.min.js',
], 'public/sesion/js/app.min.js')
   .babel([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/sesion/css/login.css',
   ], 'public/sesion/css/app.min.css');
   mix.babel([
  'resources/assets/inicio/js/axios.min.js',
  'resources/assets/registro/js/app.js',
  'node_modules/vue/dist/vue.min.js',
  'resources/assets/registro/js/registro.js',
], 'public/registro/js/app.min.js')
   .babel([
     'resources/assets/registro/css/app.css',
   ], 'public/registro/css/app.min.css');

// Super usuario
   mix.babel([
     'resources/assets/inicio/js/materialize.min.js',
      'resources/assets/inicio/js/axios.min.js',
      'resources/assets/super_usuario/js/intro.min.js',
      'node_modules/vue/dist/vue.min.js',
      'resources/assets/super_usuario/js/app.js',
    ], 'public/super_usuario/js/app.min.js')
   .babel([
     'resources/assets/inicio/css/materialize.min.css',
     'resources/assets/super_usuario/css/introjs.min.css',
     'resources/assets/super_usuario/css/app.css',
   ], 'public/super_usuario/css/app.min.css');

  //  partners
   mix.babel([
     'resources/assets/inicio/js/materialize.min.js',
      'resources/assets/inicio/js/axios.min.js',
      // 'resources/assets/super_usuario/js/intro.min.js',
      'node_modules/vue/dist/vue.min.js',
      'resources/assets/partnerts/js/main.js',
    ], 'public/partnerts/js/app.min.js')
   .babel([
     'resources/assets/inicio/css/materialize.min.css',
     // 'resources/assets/super_usuario/css/introjs.min.css',
     'resources/assets/partnerts/css/main.css',
   ], 'public/partnerts/css/app.min.css');


  // Ordenes
  mix.babel([
     'resources/assets/inicio/js/axios.min.js',
     'resources/assets/admin/js/materialize.min.js',
     'resources/assets/admin/js/moment-with-locales.min.js',
     'node_modules/vue/dist/vue.min.js',
     'resources/assets/ordenes/js/main.js',
   ], 'public/ordenes/js/app.min.js')
  .babel([
    'resources/assets/inicio/css/materialize.min.css',
    // 'resources/assets/super_usuario/css/introjs.min.css',
    'resources/assets/ordenes/css/main.css',
  ], 'public/ordenes/css/app.min.css');

   // Personalización//////////
   mix.babel([
    'resources/assets/inicio/js/axios.min.js',
    'resources/assets/admin/js/materialize.min.js',
    'resources/assets/admin/js/moment-with-locales.min.js',
    'node_modules/vue/dist/vue.min.js',
    'resources/assets/personalizar/js/app.js',
  ], 'public/personalizar/js/app.min.js')
 .babel([
   'resources/assets/inicio/css/materialize.min.css',
   // 'resources/assets/super_usuario/css/introjs.min.css',
   'resources/assets/personalizar/css/app.css',
 ], 'public/personalizar/css/app.min.css');



// Configurando babel
   mix.webpackConfig({
        module: {
            rules: [{
                test: /\.jsx?$/,
                exclude: /node_modules(?!\/@<redacted>)/,
                use: [{
                    loader: 'babel-loader',
                    options: Config.babel()
                }]
            }]
        }
    }).version()
