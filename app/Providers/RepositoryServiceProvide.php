<?php
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Repositories\Auth\AuthInterface', 'App\Repositories\Auth\AuthRepository');
        $this->app->bind('App\Repositories\Blog\BlogInterface', 'App\Repositories\Blog\BlogRepository');
        $this->app->bind('App\Repositories\Bussiness\BussinessInterface', 'App\Repositories\Bussiness\BussinessRepository');
        $this->app->bind('App\Repositories\Catalog\CatalogInterface', 'App\Repositories\Catalog\CatalogRepository');
        $this->app->bind('App\Repositories\Home\HomeInterface', 'App\Repositories\Home\HomeRepository');
        $this->app->bind('App\Repositories\Review\ReviewInterface', 'App\Repositories\Review\ReviewRepository');
        $this->app->bind('App\Repositories\Blog\BlogInterface', 'App\Repositories\Blog\BlogRepository');
    }
}
