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
                                    {{--<button class="btn btn-bold btn-block btn-primary"--}}
                                        {{--type="submit">{{ __('Send Password Reset Link') }}</button>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                {{--<div class="form-group form-group-default">--}}
                                {{--<label>First Name</label>--}}
                                {{--<input type="text" name="fname" placeholder="John" class="form-control" required>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                {{--<div class="form-group form-group-default">--}}
                                {{--<label>Last Names</label>--}}
                                {{--<input type="text" name="lname" placeholder="Smith" class="form-control" required>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<div class="form-group form-group-default">--}}
                                {{--<label>Pages User name</label>--}}
                                {{--<input type="text" name="uname" placeholder="yourname.pages.com (this can be changed later)" class="form-control" required>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<div class="form-group form-group-default">--}}
                                {{--<label>Password</label>--}}
                                {{--<input type="password" name="pass" placeholder="Minimum of 4 Charactors" class="form-control" required>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<div class="form-group form-group-default">--}}
                                {{--<label>Email</label>--}}
                                {{--<input type="email" name="email" placeholder="We will send loging details to you" class="form-control" required>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row m-t-10">--}}
                                {{--<div class="col-lg-6">--}}
                                {{--<p><small>I agree to the <a href="#" class="text-info">Pages Terms</a> and <a href="#" class="text-info">Privacy</a>.</small></p>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-6 text-right">--}}
                                {{--<a href="#" class="text-info small">Help? Contact Support</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>--}}
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
