@extends('layouts.auth')

@section('content')
    <div class="row min-h-fullscreen center-vh p-20 m-0">
        <div class="col-12">
            <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
                <h5 class="text-uppercase">Sign in</h5>
                <br>

                <form class="form-type-material" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               id="email" name="email" value="{{ old('email') }}" required>
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="password" name="password" required>
                        <label for="password">{{ __('Password') }}</label>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
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
                    <a class="btn btn-square btn-info" href="#"><i class="fa fa-github"></i></a>
                    <a class="btn btn-square btn-success" href="#"><i class="fa fa-wechat"></i></a>
                </div>
            </div>
            <p class="text-center text-muted fs-13 mt-20">Don't have an account ? <a class="text-primary fw-500"
                                                                                     href="{{ route('register') }}">Sign
                    up</a></p>
        </div>

        @include('auth.components._footer')
    </div>
@endsection


