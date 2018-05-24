@extends('dashboard.layouts.admin')

@section('title', 'Profile')

@section('content')
    <header class="header bg-img" style="background-image: url(/dashboard-assets/img/bg/03.jpg)">
        <div class="header-info h-250px mb-0">
            <div class="media align-items-end">
                <img class="avatar avatar-xl avatar-bordered" src="{{ Auth::user()->avatar }}" alt="...">
                <div class="media-body">
                    <p class="text-white opacity-90"><strong>{{ Auth::user()->name }}</strong></p>
                    <small class="text-white opacity-60">Web Designer</small>
                </div>
            </div>
            <div class="media align-items-end">
                <a class="btn btn-outline btn-info" href="{{ route('admin.users.edit', ['id' => Auth::user()->id]) }}">更新个人资料</a>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="row">

        </div>
    </div>
@endsection