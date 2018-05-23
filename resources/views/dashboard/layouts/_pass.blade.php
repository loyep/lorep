
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="forget, password">

    <title>@yield('title') | {{ config('app.name') }}</title>

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

<body class="min-h-fullscreen bg-img center-vh p-20" style="background-image: url(/dashboard-assets/img/bg/02.jpg);" data-overlay="7">

{{--<div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">--}}
    @yield('content')
{{--</div>--}}

<!-- Scripts -->
<script src="/dashboard-assets/js/core.min.js"></script>
<script src="/dashboard-assets/js/app.min.js"></script>
<script src="/dashboard-assets/js/script.min.js"></script>

</body>
</html>

