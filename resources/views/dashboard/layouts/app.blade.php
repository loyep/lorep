<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('assets/dashboard/css/app.css') }}" rel="stylesheet">

@yield('styles')

<!-- Scripts -->
    <script>
        window.Language = '{{ config('app.locale') }}';
        window.Laravel = @json(['csrfToken' => csrf_token()]);
    </script>
</head>
<body data-provide="pace">
<div id="app">

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="spinner-dots">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
        </div>
    </div>

    @include('dashboard.components._sidebar')

    @include('dashboard.components._topbar')

    <main class="main-container">
        @yield('content')

        @include('admin.components._footer')

    </main>
    @include('dashboard.components._floataction')

    @include('dashboard.components._quickview')
</div>

<!-- Scripts -->
{{--<script src="{{ mix('js/dashboard.js') }}"></script>--}}
</body>
</html>
