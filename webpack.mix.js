const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

    /*------------------------------------Tailwind, postcss, autoprefixer-----------*/
 mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

    /*------------------------------------Javascript--------------------------------*/
    // Controls
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/controls/controls.js', 'public/js/controls');
    //Views
mix.js('resources/js/views/reticula/reticula.js', 'public/js/views/reticula/');


    /*------------------------------------Styles------------------------------------*/
    // Controls
mix.css('resources/css/controls/controls.css', 'public/css/controls');
    // Views
mix.css('resources/css/views/reticula/reticula.css', 'public/css/views/reticula/')
    .css('resources/css/views/extracurriculars/extracurriculars.css', 'public/css/views/extracurriculars/');
