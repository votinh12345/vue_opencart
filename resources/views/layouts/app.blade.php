<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>        
        <!-- Styles -->
        <link href="{{ asset('css/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/morris.js/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="app" class="wrapper">
            <header class="main-header">
                @include('layouts.include.header')
            </header>

            <aside class="main-sidebar">
                @include('layouts.include.sidebar')
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    @include('layouts.include.breadcrumb')
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- !Main content -->
            </div>
        </div>

        <script src="{{ asset('css/bower_components/jquery/dist/jquery.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/jquery-ui/jquery-ui.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/raphael/raphael.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/morris.js/morris.min.js') }}" ></script>
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" ></script>
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" ></script>
        <script src="{{ asset('css/bower_components/jquery-knob/dist/jquery.knob.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/moment/min/moment.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}" ></script>
        <script src="{{ asset('css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" ></script>
        <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/fastclick/lib/fastclick.js') }}" ></script>
        <script src="{{ asset('css/dist/js/adminlte.min.js') }}" ></script>

<!--        <script src="{{ asset('css/dist/js/demo.js') }}" ></script>-->

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
