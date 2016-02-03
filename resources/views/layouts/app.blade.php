<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- /Meta Data -->

    <!-- Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- /Fonts -->

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('external-stylesheets')
    @yield('inline-stylesheets')
    <!-- /Stylesheets -->
</head>
<body id="app-layout">
    <!-- Navigation -->
    @include('partials.navigation')
    <!-- /Navigation -->

    <!-- Content -->
    @yield('content')
    <!-- /Content -->

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('external-javascript')
    @yield('inline-javascript')
    <!-- /JavaScripts -->
</body>
</html>
