<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, indicator, icon">

    <title>@yield('title', 'Dashboard') | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/dashboard-assets/css/core.min.css" rel="stylesheet">
    <link href="/dashboard-assets/css/app.min.css" rel="stylesheet">
    <link href="/dashboard-assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/dashboard-assets/img/apple-touch-icon.png">
    <link rel="icon" href="/dashboard-assets/img/favicon.png">
</head>

<body>
@include('dashboard.components._preloader')

@include('dashboard.components._sidebar')

@include('dashboard.components._topbar')

<!-- Main container -->
<main class="main-container">

    @yield('content')

    @include('dashboard.components._footer')
</main>
<!-- END Main container -->

@include('dashboard.components._quickview')
@include('dashboard.components._script')
</body>
</html>
