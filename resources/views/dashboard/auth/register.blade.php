@extends('dashboard.layouts._login')

@section('title', 'Reset Password')

@section('content')
    <div class="px-80 py-30">
        <h4>{{ __('Reset Password') }}</h4>
        <p>
            <small>All fields are required.</small>
        </p>
        <br>
        <form class="form-type-line" action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('User Name') }}</label>

                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
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

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
            </div>
        </form>
        <hr class="w-30px">
        <p class="text-center text-muted fs-13 mt-20">Already have an account?
            <a class="text-primary fw-500" href="{{ route('login') }}">Sign in</a>
        </p>
    </div>
@endsection

