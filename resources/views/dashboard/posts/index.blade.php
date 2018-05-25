@extends('dashboard.layouts.admin')

@section('title', '查看 Posts')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h4>查看 Posts</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">查看 Posts</li>
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
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="id"
                                                   value="{{ $post->id }}">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>{{ $post->id }}</td>
                                    <td><a href="{{ route('admin.posts.edit', [$post->id]) }}">{{ $post->title }}</a>
                                    </td>
                                    <td>
                                        <span class="btn
                                        @switch($post->status)
                                            @case('publish')
                                                btn-success
                                            @break
                                            @default
                                                btn-danger
                                            @break
                                        @endSwitch
                                                btn-xs">{{ $post->status }}</span>
                                    </td>
                                    <td>{{ $post->order }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td><a href="{{ route('admin.posts.edit', [$post->id]) }}" class="btn btn-info btn-sm">编辑</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection