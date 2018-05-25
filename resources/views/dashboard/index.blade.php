@extends('dashboard.layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <header class="header">
        <div class="header-bar">
            <h2 class="header-title"><strong>Dashboard</strong></h2>
        </div>
    </header>
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Articles</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="{{ route('admin.posts.index') }}">View</a></span>
                    </h6>
                    <br>
                    @inject('post', 'App\Repositories\PostRepository')
                    <p class="fs-28 fw-100">{{ $post->all()->count() }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Categories</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="{{ route('admin.categories.index') }}">View</a></span>
                    </h6>
                    <br>
                    @inject('category', 'App\Repositories\CategoryRepository')
                    <p class="fs-28 fw-100">{{ $category->all()->count() }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Tags</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="{{ route('admin.tags.index') }}">View</a></span>
                    </h6>
                    <br>
                    @inject('tag', 'App\Repositories\TagRepository')
                    <p class="fs-28 fw-100">{{ $tag->all()->count() }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Comments</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="{{ route('admin.comments.index') }}">View</a></span>
                    </h6>
                    <br>
                    @inject('comment', 'App\Repositories\CommentRepository')
                    <p class="fs-28 fw-100">{{ $comment->all()->count() }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card card-body">
                    <h6>
                        <span class="text-uppercase">Users</span>
                        <span class="float-right"><a class="btn btn-xs btn-primary" href="{{ route('admin.users.index') }}">View</a></span>
                    </h6>
                    <br>
                    @inject('user', 'App\Repositories\UserRepository')
                    <p class="fs-28 fw-100">{{ $user->all()->count() }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection