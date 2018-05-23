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
            <div class="col-6 col-lg-3">
                <div class="card shadow-1">
                    <div class="card-body">
                        <div class="flexbox">
                            <h5>Articles</h5>
                            <div class="dropdown">
                                <span class="dropdown-toggle no-caret" data-toggle="dropdown">
                                    <i class="ti-more-alt rotate-90"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                    <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                    <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-2">
                            <div class="fs-60 fw-400 text-info">34</div>
                            <span class="fw-400 text-muted">Total</span>
                        </div>
                    </div>

                    <div class="card-body bg-lighter fw-400 py-12">
                        <span class="text-muted mr-1">Draft:</span>
                        <span class="text-dark">16</span>
                    </div>

                    <div class="progress mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%; height: 3px;"
                             aria-valuenow="16" aria-valuemin="0" aria-valuemax="34"></div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="card shadow-1">
                    <div class="card-body">
                        <div class="flexbox">
                            <h5>Categories</h5>
                            <div class="dropdown">
                                <span class="dropdown-toggle no-caret" data-toggle="dropdown">
                                    <i class="ti-more-alt rotate-90"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                    <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                    <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i>
                                        Refresh</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-2">
                            <div class="fs-60 fw-400 text-danger">{{ \App\Entities\Category::all()->count() }}</div>
                            <span class="fw-400 text-muted">Total</span>
                        </div>
                    </div>

                    <div class="card-body bg-lighter fw-400 py-12">
                        <span class="text-muted mr-1">Used:</span>
                        <span class="text-dark">9</span>
                    </div>

                    <div class="progress mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%; height: 3px;"
                             aria-valuenow="9" aria-valuemin="0" aria-valuemax="15"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.main-content -->
@endsection