const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('ocs.scss')
        .sass('landing.scss')
        .webpack('ocs.js')
        .copy('resources/assets/img/landing-bg.jpg', 'public/img/landing-bg.jpg')
        .copy('resources/assets/img/home-bg.jpg', 'public/img/home-bg.jpg');
});
