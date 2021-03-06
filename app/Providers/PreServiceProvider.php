<?php

namespace YaangVu\SisModel\App\Providers;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Mongodb\MongodbServiceProvider;

class PreServiceProvider extends ServiceProvider
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
        $this->app->register(MongodbServiceProvider::class);
    }
}
