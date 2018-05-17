<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CommentRepository::class, \App\Repositories\CommentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PostRepository::class, \App\Repositories\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OptionRepository::class, \App\Repositories\OptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\LinkRepository::class, \App\Repositories\LinkRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TagRepository::class, \App\Repositories\TagRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\FormRepository::class, \App\Repositories\FormRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GridRepository::class, \App\Repositories\GridRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TreeRepository::class, \App\Repositories\TreeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PermissionRepository::class, \App\Repositories\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RoleRepository::class, \App\Repositories\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MenuRepository::class, \App\Repositories\MenuRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OperationLogRepository::class, \App\Repositories\OperationLogRepositoryEloquent::class);
        //:end-bindings:
    }
}
