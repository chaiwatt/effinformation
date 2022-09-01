const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/helper/imask.js', 'public/js/helper');
mix.css('resources/css/app.css', 'public/css');


