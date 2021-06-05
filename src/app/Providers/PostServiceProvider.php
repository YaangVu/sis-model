<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Flipbox\LumenGenerator\LumenGeneratorServiceProvider;
use Illuminate\Cache\CacheManager;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\PermissionServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(IdeHelperServiceProvider::class);
        $this->app->register(LumenGeneratorServiceProvider::class);
        $this->app->configure('permission');
        $this->app->alias('cache', CacheManager::class);
        $this->app->register(PermissionServiceProvider::class);
    }
}
