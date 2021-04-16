const mix = require('laravel-mix');

mix
    .js('resources/js/pqrs/main.js', 'public/js/pqrs').vue()
    .js('resources/js/clasificados/main.js', 'public/js/clasificados').vue()
    .js('resources/js/eventos/main.js', 'public/js/eventos').vue()
 