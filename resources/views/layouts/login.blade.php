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
        <link href="{{ asset('plugins/iCheck/square/blue.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <?php
    $action = \Request::route()->getName();
    ?>
    <body class="hold-transition <?php echo ($action == 'login') ? 'login-page' : 'register-page' ?>">
        <div id="app" class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <div class="login-box-body">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('css/bower_components/jquery/dist/jquery.min.js') }}" ></script>
        <script src="{{ asset('css/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('plugins/iCheck/icheck.min.js') }}" ></script>

        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>
