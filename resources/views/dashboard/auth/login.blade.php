@extends('dashboard.layouts.login')

@section('title', 'Login')

@section('content')
    <div class="px-80 py-30">
        <h4>Login</h4>
        <p>
            <small>Sign into your account</small>
        </p>
        <br>
        <form class="form-type-line" method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       id="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong>                     </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       id="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="form-group flexbox flex-column flex-md-row">
                <div class="custom-control custom-checkbox">
                    <input id="remember" type="checkbox" name="remember"
                           class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                </div>

                <a class="text-muted hover-primary fs-13 mt-2 mt-md-0" href="{{ route('password.request') }}">Forgot
                    password?</a>
            </div>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Sign In') }}</button>
            </div>
        </form>
        <div class="divider">Or Sign In With</div>
        <div class="text-center">
            <a class="btn btn-square btn-dark" href="#"><i class="fa fa-github"></i></a>
            <a class="btn btn-square btn-google" href="#"><i class="fa fa-google"></i></a>
        </div>
        <hr class="w-30px">
        <p class="text-center text-muted fs-13 mt-20">Don't have an account?
            <a class="text-primary fw-500" href="{{ route('register') }}">Sign up</a>
        </p>
    </div>
@endsection