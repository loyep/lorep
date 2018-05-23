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

    <header class="header bg-ui-general">
        <div class="header-info">
            <h1 class="header-title">
                <strong>Icon indicator</strong> sidebar
                <small>Sidebar is the main navigation for most of admin templates and web apps.</small>
            </h1>
        </div>

        <div class="header-action">
            <nav class="nav">
                <a class="nav-link active" href="sidebar.html">Variations</a>
                <a class="nav-link" href="sidebar-doc.html">Documentation</a>
            </nav>
        </div>
    </header><!--/.header -->


    <div class="main-content">


        <div class="card">
            <h4 class="card-title"><strong>Layout</strong></h4>

            <div class="card-body">
                <div class="row gap-y text-center">
                    <div class="col-md-6 col-xl-4">
                        <p class="fs-15">Default</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-default.html">
                            <img src="/dashboard-assets/img/preview/sidebar-default.png" alt="Sidebar default page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-md-none">
                        <p class="fs-15">Icons boxed</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-icons-boxed.html">
                            <img src="/dashboard-assets/img/preview/sidebar-icons-boxed.png"
                                 alt="Sidebar icons boxed page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-xl-none">
                        <p class="fs-15">Icons right</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-icons-right.html">
                            <img src="/dashboard-assets/img/preview/sidebar-icons-right.png"
                                 alt="Sidebar icons right page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr>
                        <p class="fs-15">Icons right boxed</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-icons-right-boxed.html">
                            <img src="/dashboard-assets/img/preview/sidebar-icons-right-boxed.png"
                                 alt="Sidebar icons boxed right page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr>
                        <p class="fs-15">Sidebar folded 1</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-folded-1.html">
                            <img src="/dashboard-assets/img/preview/sidebar-folded-1.png" alt="Sidebar folded page 1">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr>
                        <p class="fs-15">Sidebar folded 2</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-folded-2.html">
                            <img src="/dashboard-assets/img/preview/sidebar-folded-2.png" alt="Sidebar folded page 2">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <h4 class="card-title"><strong>Menu</strong> types</h4>

            <div class="card-body">
                <div class="row gap-y text-center">
                    <div class="col-md-6 col-xl-4">
                        <p class="fs-15">Iconic</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-iconic.html">
                            <img src="/dashboard-assets/img/preview/sidebar-iconic.png" alt="Sidebar iconic page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-md-none">
                        <p class="fs-15">Bordery</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-bordery.html">
                            <img src="/dashboard-assets/img/preview/sidebar-bordery.png" alt="Sidebar bordery page">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <h4 class="card-title"><strong>Menu indicator</strong> types</h4>

            <div class="card-body">
                <p>Default menu indicator of current documetation is <code>icon</code> for menus, and <code>dot</code>
                    for submenus. Apart from them, you are able to use characters or even empty space.</p>
                <br>
                <div class="row gap-y text-center">
                    <div class="col-md-6 col-xl-4">
                        <p class="fs-15 fw-400">Icon</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-3 shadow-4"
                           href="sidebar-indicator-icon.html">
                            <img src="/dashboard-assets/img/preview/sidebar-indicator-icon.png"
                                 alt="Sidebar indicator icon page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-md-none">
                        <p class="fs-15">Character</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-indicator-char.html">
                            <img src="/dashboard-assets/img/preview/sidebar-indicator-char.png"
                                 alt="Sidebar indicator character page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-xl-none">
                        <p class="fs-15">Empty space</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-indicator-empty.html">
                            <img src="/dashboard-assets/img/preview/sidebar-indicator-empty.png"
                                 alt="Sidebar indicator empty space page">
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <h4 class="card-title"><strong>Skins</strong></h4>

            <div class="card-body">
                <div class="row gap-y text-center">
                    <div class="col-md-6 col-xl-4">
                        <p class="fs-15">Light</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-skin-light.html">
                            <img src="/dashboard-assets/img/preview/sidebar-skin-light.png"
                                 alt="Sidebar skin light page">
                        </a>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <hr class="d-md-none">
                        <p class="fs-15">Dark</p>
                        <a class="d-block b-1 border-light hover-shadow-2 p-1" href="sidebar-skin-dark.html">
                            <img src="/dashboard-assets/img/preview/sidebar-skin-dark.png" alt="Sidebar skin dark page">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.main-content -->
    @include('dashboard.components._footer')
</main>
<!-- END Main container -->

@include('dashboard.components._quickview')
@include('dashboard.components._script')
</body>
</html>
