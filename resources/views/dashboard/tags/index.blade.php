@extends('dashboard.layouts.admin')

@section('title', '查看 Tags')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h4>查看 Tags</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">查看 Tags</li>
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
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Order</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="id"
                                                   value="{{ $tag->id }}">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.tags.edit', [$tag->id]) }}">{{ $tag->name }}</a></td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ $tag->order }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td><a href="{{ route('admin.tags.edit', [$tag->id]) }}" class="btn btn-info btn-sm">编辑</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection