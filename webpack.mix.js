let mix = require('laravel-mix');
let merge = require('webpack-merge');
let CleanWebpackPlugin = require('clean-webpack-plugin');
let mixWebpackConfig = require('laravel-mix/setup/webpack.config');

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

mix.sourceMaps(!mix.inProduction());

/* App */

// mix.js('resources/assets/app/js/main.js', 'public/assets/app/js/app.js')
//     .sass('resources/assets/app/sass/style.scss', 'public/assets/app/css/app.css')
//     .version();

/* Dashboard */

let webpackConfig = {
    plugins: [
        new CleanWebpackPlugin('public/assets/dashboard/dist'),
    ],
};

mix.scripts(
    [

        // Core
        'resources/assets/dashboard/vendor/pace/pace.min.js',
        'resources/assets/dashboard/vendor/jquery/jquery.min.js',
        'resources/assets/dashboard/vendor/popper/popper.min.js',
        'resources/assets/dashboard/vendor/bootstrap/js/bootstrap.min.js',
        'resources/assets/dashboard/vendor/lab/LAB.min.js',
        'resources/assets/dashboard/vendor/jquery.hotkeys/jquery.hotkeys.js',
        'resources/assets/dashboard/vendor/push/push.min.js',
        'resources/assets/dashboard/vendor/animsition/js/animsition.min.js',
        'resources/assets/dashboard/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',

        // App
        'resources/assets/dashboard/js/src/jquery-extends.js',
        'resources/assets/dashboard/js/src/app.js',

        // Providers
        'resources/assets/dashboard/js/src/provider/provider.js',
        'resources/assets/dashboard/js/src/provider/provider-list.js',
        'resources/assets/dashboard/js/src/provider/chart.js',
        'resources/assets/dashboard/js/src/provider/code.js',
        'resources/assets/dashboard/js/src/provider/editor.js',
        'resources/assets/dashboard/js/src/provider/emoji.js',
        'resources/assets/dashboard/js/src/provider/form.js',
        'resources/assets/dashboard/js/src/provider/icon.js',
        'resources/assets/dashboard/js/src/provider/map.js',
        'resources/assets/dashboard/js/src/provider/table.js',
        'resources/assets/dashboard/js/src/provider/ui.js',
        'resources/assets/dashboard/js/src/provider/upload.js',
        'resources/assets/dashboard/js/src/provider/misc.js',

        // Plugnis
        'resources/assets/dashboard/js/src/plugin/map.js',
        'resources/assets/dashboard/js/src/plugin/modaler.js',
        'resources/assets/dashboard/js/src/plugin/toast.js',

        // Components
        'resources/assets/dashboard/js/src/component/aside.js',
        'resources/assets/dashboard/js/src/component/topbar.js',
        'resources/assets/dashboard/js/src/component/sidebar.js',
        'resources/assets/dashboard/js/src/component/quickview.js',
        'resources/assets/dashboard/js/src/component/dock.js',
        'resources/assets/dashboard/js/src/component/topbar-menu.js',
        'resources/assets/dashboard/js/src/component/lookup.js',
        'resources/assets/dashboard/js/src/component/cards.js',


        'resources/assets/dashboard/js/src/app-extra.js',
        'resources/assets/dashboard/js/src/app-init.js',
    ],
    'public/assets/dashboard/dist/app.js')
    .js('resources/assets/dashboard/js/script/main.js', 'public/assets/dashboard/dist/script.js')
    .scripts(
    [
        'public/assets/dashboard/dist/app.js',
        'public/assets/dashboard/dist/script.js'
    ],
    'public/assets/dashboard/js/core.min.js')
    .version();

mix.copyDirectory('resources/assets/dashboard/vendor', 'public/assets/dashboard/vendor')
    .webpackConfig(merge.smart(mixWebpackConfig, webpackConfig));

mix.sass('resources/assets/dashboard/sass/style.scss', 'public/assets/dashboard/css/app.css')
    .version();
