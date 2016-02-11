<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('larastart.website_name') }}</title>
    <!-- /Meta Data -->

    <!-- Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- /Fonts -->

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('external-stylesheets')
    @yield('inline-stylesheets')
    <!-- /Stylesheets -->
</head>
<body id="app-layout">
<!-- Back-to-Top -->
<a href="#top" id="top-button" title="Top"><i class="fa fa-arrow-up"></i></a>
<!-- /Back-to-Top -->

<!-- Navigation -->
@include('partials.navigation')
<!-- /Navigation -->

<!-- Content -->
<div class="container">
    <div class="row">
        <!-- Left side widgets -->
        <div class="col-md-2">
            @include('partials.left')
        </div>
        <!-- /Left side widgets -->

        <!-- Content -->
        <div class="col-md-8">
            @include('flash::message')

            @yield('content')
        </div>
        <!-- /Content -->

        <!-- Right Side Widgets -->
        <div class="col-md-2">
            @include('partials.right')
        </div>
        <!-- /Right Side Widgets -->
    </div>
</div>
<!-- /Content -->

<!-- JavaScripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
@yield('external-javascript')
@yield('inline-javascript')
<!-- /JavaScripts -->

<!-- User Report -->
<script type="text/javascript">
    var _urq = _urq || [];
    _urq.push(['initSite', '{{ env('USER_REPORT_KEY') }}']);
    (function () {
        var ur = document.createElement('script');
        ur.type = 'text/javascript';
        ur.async = true;
        ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ur, s);
    })();
</script>
<!-- /User Report -->
</body>
</html>
