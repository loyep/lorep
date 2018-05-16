<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    <link href="{{ mix('assets/dashboard/css/app.css') }}" rel="stylesheet">

@yield('styles')

<!-- Scripts -->
    <script>
        window.Language = '{{ config('app.locale') }}';
        window.Laravel = @json(['csrfToken' => csrf_token()]);
    </script>
</head>
<body>

<div id="app">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ mix('assets/dashboard/js/core.min.js') }}"></script>
</body>
</html>
