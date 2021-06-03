const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/custom.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.options({
    // Don't perform any css url rewriting by default
    processCssUrls: true,
})

// mix.sass('resource/sass/app.scss', 'public/css', {
//     // Rewrite CSS urls for app.scss
//     processUrls: true,
// });

mix.copy('node_modules/slick-carousel/slick', 'public/assets/slick');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/assets/js');
mix.copy('resources/assets/images', 'public/assets/images');
