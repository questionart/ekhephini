<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ekhephini') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">body, textarea, .form-control, .form-group, .navbar, .navbar-default, .navbar-static-top,.jumbotron, .btn, .well, .row, .navbar-header{background-color: #000; text-shadow: 0px 1px 1px #fff;}</style>
</head>
<body>
    <div id="app">
        @yield('nav')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
