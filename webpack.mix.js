const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/css/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            require('postcss-import'),
            require('tailwindcss'),
        ],
    })
    .version();
