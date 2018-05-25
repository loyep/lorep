@extends('dashboard.layouts.admin')

@section('title', '查看 Categories')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h4>查看 Categories</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">查看 Categories</li>
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
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="id"
                                                   value="{{ $category->id }}">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.categories.edit', [$category->id]) }}">{{ $category->name }}</a></td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->order }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td><a href="{{ route('admin.categories.edit', [$category->id]) }}" class="btn btn-info btn-sm">编辑</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection