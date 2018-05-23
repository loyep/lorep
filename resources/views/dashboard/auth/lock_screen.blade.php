@extends('dashboard.layouts._pass')

@section('title', 'Lock Screen')

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0 text-center" style="max-width: 100%">
        <div>
            <img class="avatar avatar-xxl" src="/dashboard-assets/img/avatar/2.jpg" alt="...">
            <br><br>
            <h5 class="lead">Hossein Shams</h5>
            <small>Enter your password to retrieve your session</small>
        </div>

        <hr class="w-30px">

        <form class="form-type-line " action="#" method="post">
            @csrf
            <div class="form-group text-left">
                <label for="password">{{ __('Password') }}</label>

                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       id="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit"><i class="fa fa-unlock-alt mr-2"></i>
                Unlock
            </button>
        </form>

        <p class="text-center text-muted fs-13 mt-20">
            You're not Hossein Shams?
            <a class="text-primary fw-500" href="{{ route('login', ['type' => 'logout']) }}">Sign in</a>
        </p>
    </div>
@endsection