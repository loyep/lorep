@extends('dashboard.layouts.admin')

@section('title', '编辑用户')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h4>编辑 Users</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">编辑 Users</li>
            </ol>
        </div>
    </header>

    <div class="main-content">
        <div class="row">
            <div class="col-lg-8">
                <form class="card" method="post" action="{{ route('admin.users.update', ['id' => $user->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong>                     </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text"
                                   class="form-control{{ $errors->has('display_name') ? ' is-invalid' : '' }}"
                                   name="display_name" value="{{ $user->display_name }}">
                            @if ($errors->has('display_name'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('display_name') }}</strong>                     </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong>                     </span>
                            @endif
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </footer>
                </form>
            </div>
            <div class="col-lg-4">
                <form class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" data-provide="dropify">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection