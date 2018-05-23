@extends('dashboard.layouts.pass')

@section('title', 'Reset Password')

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">

    <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
    <br>
    <form class="form-type-line" method="post" action="{{ route('password.email') }}">
        @csrf
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   id="email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong>                     </span>
            @endif
        </div>
        <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
    </form>
    </div>
@endsection