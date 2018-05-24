@extends('dashboard.layouts.admin')

@section('title', '查看 Users')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h4>查看 Users</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">查看 Users</li>
            </ol>
        </div>
    </header>

    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="w-40px">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Avatar</th>
                                <th>Url</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="id"
                                                   value="{{ $user->id }}">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.users.edit', [$user->id]) }}">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><img src="{{ $user->avatar }}"/></td>
                                    <td>{{ $user->url }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection