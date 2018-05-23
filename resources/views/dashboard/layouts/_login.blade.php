<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="login, signin">

    <title>@yield('title', '') | {{ config('app.name') }}</title>

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

<div class="row no-gutters min-h-fullscreen bg-white">
    <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block bg-img"
         style="background-image: url(/dashboard-assets/img/bg/01.jpg)" data-overlay="5">

        <div class="row h-100 pl-50">
            <div class="col-md-10 col-lg-8 align-self-end">
                <div class="row">
                    <div class="col-auto">
                        <img class="animated rotate-in" src="/dashboard-assets/img/favicon.png" alt="...">
                    </div>
                    <div class="col-auto">
                        <h4 class="text-white">Lorep</h4>
                        <p class="text-white">Welcome to Lorep. The Missing Admin for Laravel .</p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="/dashboard-assets/js/core.min.js"></script>
<script src="/dashboard-assets/js/app.min.js"></script>
<script src="/dashboard-assets/js/script.min.js"></script>
</body>
</html>

