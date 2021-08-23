<?php

namespace YaangVu\SisModel\App\Providers;

use Illuminate\Support\ServiceProvider;
use YaangVu\SisModel\App\Models\impl\UserSQL;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a UserNoSQL instance or null. You're free to obtain
        // the UserNoSQL instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {
            $uuid = $request->header('X-user-uuid');
            if ($uuid)
                return UserSQL::with('userNoSql')->whereUuid($uuid)->first();
            else
                return new UserSQL();
        });
    }
}
