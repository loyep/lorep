<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Reset Password | {{ config('app.name') }}</title>

    <link rel="apple-touch-icon" href="/assets/dashboard/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/dashboard/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/dashboard/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/dashboard/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/dashboard/assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/assets/dashboard/global/vendor/waves/waves.css">

    <!-- Page -->
    <link rel="stylesheet" href="/assets/dashboard/assets/examples/css/pages/login-v3.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/dashboard/global/fonts/material-design/material-design.min.css">
    {{--<link rel="stylesheet" href="/assets/dashboard/global/fonts/brand-icons/brand-icons.min.css">--}}
    <link rel="stylesheet" href="/assets/dashboard/global/fonts/font-awesome/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="/assets/dashboard/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="/assets/dashboard/global/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/dashboard/global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="/assets/dashboard/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v3 layout-full">
<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <img class="brand-img" src="/assets/dashboard/assets/images/logo-colored.png" alt="...">
                    <h2 class="brand-text font-size-18">{{ __('Reset Password') }}</h2>
                </div>
                <form method="post" action="{{ route('password.request') }}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group text-left form-material{{ $errors->has('email') ? ' has-danger' : '' }}"
                         data-plugin="formMaterial">
                        <label class="form-control-label" for="email">E-Mail Address</label>
                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               id="email"
                               name="email" value="{{ old('email', '') }}">
                        @if ($errors->has('email'))
                            <label for="email" class="invalid-feedback">{{ $errors->first('email') }}</label>
                        @endif
                    </div>
                    <div class="form-group text-left form-material{{ $errors->has('password') ? ' is-invalid' : '' }}"
                         data-plugin="formMaterial">
                        <label class="form-control-label" for="password">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="password" name="password">
                        @if ($errors->has('password'))
                            <label for="password" class="invalid-feedback">{{ $errors->first('password') }}</label>
                        @endif
                    </div>
                    <div class="form-group text-left form-material"
                         data-plugin="formMaterial">
                        <label class="form-control-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input type="text" class="form-control" id="password-confirm"
                               name="password_confirm">
                    </div>
                    <button type="submit"
                            class="btn btn-primary btn-block mt-40">{{ __('Reset Password') }}</button>
                </form>
            </div>
        </div>
        <footer class="page-copyright page-copyright-inverse">
            <p>Copyright © 2018 <a href="https://maxsey.com" class="text-white">Lorep</a>.</p>
        </footer>
    </div>
</div>
<!-- End Page -->

<!-- Core  -->
<script src="/assets/dashboard/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="/assets/dashboard/global/vendor/jquery/jquery.js"></script>
<script src="/assets/dashboard/global/vendor/popper-js/umd/popper.min.js"></script>
<script src="/assets/dashboard/global/vendor/bootstrap/bootstrap.js"></script>
<script src="/assets/dashboard/global/vendor/animsition/animsition.js"></script>
<script src="/assets/dashboard/global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/dashboard/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="/assets/dashboard/global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="/assets/dashboard/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="/assets/dashboard/global/vendor/waves/waves.js"></script>

<!-- Plugins -->
<script src="/assets/dashboard/global/vendor/switchery/switchery.js"></script>
<script src="/assets/dashboard/global/vendor/intro-js/intro.js"></script>
<script src="/assets/dashboard/global/vendor/screenfull/screenfull.js"></script>
<script src="/assets/dashboard/global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="/assets/dashboard/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Scripts -->
<script src="/assets/dashboard/global/js/Component.js"></script>
<script src="/assets/dashboard/global/js/Plugin.js"></script>
<script src="/assets/dashboard/global/js/Base.js"></script>
<script src="/assets/dashboard/global/js/Config.js"></script>

<script src="/assets/dashboard/assets/js/Section/Menubar.js"></script>
<script src="/assets/dashboard/assets/js/Section/GridMenu.js"></script>
<script src="/assets/dashboard/assets/js/Section/Sidebar.js"></script>
<script src="/assets/dashboard/assets/js/Section/PageAside.js"></script>
<script src="/assets/dashboard/assets/js/Plugin/menu.js"></script>

<script src="/assets/dashboard/global/js/config/colors.js"></script>
<script src="/assets/dashboard/assets/js/config/tour.js"></script>
<script>Config.set('assets', '/assets/dashboard/assets');</script>

<!-- Page -->
<script src="/assets/dashboard/assets/js/Site.js"></script>
<script src="/assets/dashboard/global/js/Plugin/asscrollable.js"></script>
<script src="/assets/dashboard/global/js/Plugin/slidepanel.js"></script>
<script src="/assets/dashboard/global/js/Plugin/switchery.js"></script>
<script src="/assets/dashboard/global/js/Plugin/jquery-placeholder.js"></script>
<script src="/assets/dashboard/global/js/Plugin/material.js"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>
</html>