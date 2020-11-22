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

mix.scripts('resources/js/imgAuto.js', 'public/js/imgAuto.js')
    .scripts('resources/js/nav.js', 'public/js/nav.js')
    .scripts([
        'resources/js/min.js',
        'resources/js/cookies.js',
        'resources/js/common.js',
        'resources/js/publishbox.js',
        'resources/js/jsgst.js'
    ], 'public/js/app.js')
    .styles([
        'resources/css/main.css',
        'resources/css/send.css',
        'resources/css/global.css',
        'resources/css/sidebar.css',
        'resources/css/theme.css',
        'resources/css/hack.css'
    ], 'public/css/app.css');
