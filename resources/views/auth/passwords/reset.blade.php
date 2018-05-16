@extends('layouts.auth')

@section('content')
    <div class="row min-h-fullscreen center-vh p-20 m-0">
        <div class="col-12">
            <div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
                <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
                <br>
                <form class="form-type-material" method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email ?? old('email') }}" required>
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

                    <div class="form-group">
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                               required>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    </div>

                    <br>
                    <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Reset Password') }}</button>
                </form>
            </div>
        </div>

        @include('auth.components._footer')
    </div>
@endsection
