<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Forget Password | {{ config('app.name') }}</title>

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
                    <h2 class="brand-text font-size-18">Forget Password ?</h2>
                </div>

                <form method="post" action="{{ route('password.email') }}" autocomplete="off">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group text-left form-material{{ $errors->has('email') ? ' has-danger' : '' }}"
                         data-plugin="formMaterial">
                        <label class="form-control-label" for="email">Email</label>
                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               id="email"
                               name="email" value="{{ old('email', '') }}">
                        @if ($errors->has('email'))
                            <label for="email" class="invalid-feedback">{{ $errors->first('email') }}</label>
                        @endif
                    </div>
                    <button type="submit"
                            class="btn btn-primary btn-block mt-40">{{ __('Send Password Reset Link') }}</button>
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


{{--
@extends('dashboard.auth.layouts.app')

@section('title', 'Forget Password ?')

@section('content')
    <div class="register-container full-height sm-p-t-30">
        <div class="d-flex justify-content-center flex-column full-height">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="card-title">
                                <img src="/assets/dashboard/img/logo.png" alt="logo"
                                     data-src="/assets/dashboard/img/logo.png"
                                     data-src-retina="/assets/dashboard/img/logo_2x.png" width="78" height="22">
                            </div>
                            <h3>{{ __('Reset Password') }}</h3>
                        </div>
                        <div class="card-block">
                            <form id="form-register" class="p-t-15" role="form" action="{{ route('password.email') }}">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group form-group-default sm-m-t-30">
                                    <label>Email Address</label>
                                    <div class="controls">
                                        <input id="email" type="email" name="email" placeholder="Email"
                                               class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
                                               value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <label id="email-error" class="error"
                                               for="email">{{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                                <br>
                                <button class="btn btn-primary btn-cons m-t-10" type="submit">{{ __('Send Password Reset Link') }}</button>
                                    --}}
{{--<button class="btn btn-bold btn-block btn-primary"--}}{{--

                                        --}}
{{--type="submit">{{ __('Send Password Reset Link') }}</button>--}}{{--

                                --}}
{{--<div class="row">--}}{{--

                                --}}
{{--<div class="col-md-6">--}}{{--

                                --}}
{{--<div class="form-group form-group-default">--}}{{--

                                --}}
{{--<label>First Name</label>--}}{{--

                                --}}
{{--<input type="text" name="fname" placeholder="John" class="form-control" required>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="col-md-6">--}}{{--

                                --}}
{{--<div class="form-group form-group-default">--}}{{--

                                --}}
{{--<label>Last Names</label>--}}{{--

                                --}}
{{--<input type="text" name="lname" placeholder="Smith" class="form-control" required>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="row">--}}{{--

                                --}}
{{--<div class="col-md-12">--}}{{--

                                --}}
{{--<div class="form-group form-group-default">--}}{{--

                                --}}
{{--<label>Pages User name</label>--}}{{--

                                --}}
{{--<input type="text" name="uname" placeholder="yourname.pages.com (this can be changed later)" class="form-control" required>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="row">--}}{{--

                                --}}
{{--<div class="col-md-12">--}}{{--

                                --}}
{{--<div class="form-group form-group-default">--}}{{--

                                --}}
{{--<label>Password</label>--}}{{--

                                --}}
{{--<input type="password" name="pass" placeholder="Minimum of 4 Charactors" class="form-control" required>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="row">--}}{{--

                                --}}
{{--<div class="col-md-12">--}}{{--

                                --}}
{{--<div class="form-group form-group-default">--}}{{--

                                --}}
{{--<label>Email</label>--}}{{--

                                --}}
{{--<input type="email" name="email" placeholder="We will send loging details to you" class="form-control" required>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="row m-t-10">--}}{{--

                                --}}
{{--<div class="col-lg-6">--}}{{--

                                --}}
{{--<p><small>I agree to the <a href="#" class="text-info">Pages Terms</a> and <a href="#" class="text-info">Privacy</a>.</small></p>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<div class="col-lg-6 text-right">--}}{{--

                                --}}
{{--<a href="#" class="text-info small">Help? Contact Support</a>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--</div>--}}{{--

                                --}}
{{--<button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>--}}{{--

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" full-width">
        <div class="register-container m-b-10 clearfix">
            <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up">
                <div class="col-md-2 no-padding d-flex align-items-center">
                    <img src="/assets/dashboard/img/demo/pages_icon.png" alt="" class="" data-src="/assets/dashboard/img/demo/pages_icon.png" data-src-retina="/assets/dashboard/img/demo/pages_icon_2x.png" width="60" height="60">
                </div>
                <div class="col-md-9 no-padding d-flex align-items-center">
                    <p class="hinted-text small inline sm-p-t-10">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row min-h-fullscreen center-vh p-20 m-0">
        <div class="col-12">
            <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
                <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
                <br>
                <form class="form-type-material" method="POST" action="{{ route('password.email') }}">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <br>
                    <button class="btn btn-bold btn-block btn-primary"
                            type="submit">{{ __('Send Password Reset Link') }}</button>
                </form>
            </div>
        </div>

        @include('auth.components._footer')
    </div>
@endsection
--}}
