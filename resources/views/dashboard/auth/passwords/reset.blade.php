@extends('dashboard.layouts._pass')

@section('title', 'Reset Password')

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">

    <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
    <br>

    <form class="form-type-line">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
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

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Reset Password') }}</button>
    </form>
    </div>
@endsection