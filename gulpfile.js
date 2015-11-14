var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

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

//for sass conversion use the command line like this: sass --watch style.scss:/Users/dana/dev/may/public/css/style.css

elixir(function(mix) {
   mix.livereload();
});

elixir(function(mix) {
    mix.scripts([
        'custom.js'
    ]);
});