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


<!--Morris Chart CSS -->







//
// <link href="{{ asset('backend/css/main.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet" >
//     <link href="{{ asset('backend/css/brands.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/brands.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/v4-shims.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/v4-shims.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/svg-with-js.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/solid.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/solid.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/regular.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/regular.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/svg-with-js.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/svg-with-js.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/fontawesome.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/brands.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/fontawesome.min.css') }}" rel="stylesheet">
//     <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">


mix.styles([
    'resources/css1/main.css',
    'resources/css1/all.min.css',
    'resources/css1/brands.css',
    'resources/css1/brands.min.css',
    'resources/css1/v4-shims.min.css',
    'resources/css1/v4-shims.css',
    'resources/css1/svg-with-js.min.css',
    'resources/css1/solid.css',
    'resources/css1/solid.min.css',
    'resources/css1/regular.css',
    'resources/css1/regular.min.css',
    'resources/css1/svg-with-js.css',
    // 'resources/css1/font-awesome.min.css',
    // 'resources/css1/fontawesome.css',
    // 'resources/css1/font-awesome.css',
    // 'resources/css1/fontawesome.min.css',
    // 'resources/css1/font-awesome.min.css',
], 'public/backend/app.css');


// <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/bootstrap.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/popper.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/pace.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/main.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/jquery.vmap.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/jquery.vmap.sampledata.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/jquery.vmap.world.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/jquery-ui.custom.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/chart.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/bootstrap-datepicker.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/bootstrap-notify.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/fullcalendar.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/moment.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/pace.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/select2.min.js') }}" ></script>
//     <script src="{{ asset('backend/js/plugins/sweetalert.min.js') }}" ></script>


// mix.js([
//     'resources/js1/jquery-3.2.1.min.js',
//     'resources/js1/bootstrap.min.js',
//     'resources/js1/popper.min.js',
//     'resources/js1/main.js',
//     'resources/js1/jquery.dataTables.min.js',
//     'resources/js1/jquery.vmap.min.js',
//     'resources/js1/jquery.vmap.world.js',
//     'resources/js1/jquery-ui.custom.min.js',
//     'resources/js1/chart.js',
//     'resources/js1/bootstrap-datepicker.min.js',
//     'resources/js1/bootstrap-notify.min.js',
//     'resources/js1/fullcalendar.min.js',
//     'resources/js1/moment.min.js',
//     'resources/js1/jquery.vmap.sampledata.js',
//     'resources/js1/select2.min.js',
//     'resources/js1/sweetalert.min.js',
//     'resources/js1/dataTables.bootstrap.min',
//     'resources/js1/pace.min.js',
// ], 'public/backend/app.js');


