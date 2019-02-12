const mix = require('laravel-mix');
mix.setPublicPath('src/resources/dist');

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

mix.js('src/resources/js/app.js', 'src/resources/dist/mage.js')
   .sass('src/resources/sass/app.scss', 'src/resources/dist/mage.css')
   .version();
