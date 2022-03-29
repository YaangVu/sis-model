<?php

namespace YaangVu\SisModel\App\Providers;

use Illuminate\Support\ServiceProvider;
use YaangVu\SisModel\App\Models\impl\RoleSQL;

class RoleServiceProvider extends ServiceProvider
{
    public static ?RoleSQL $currentRole;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $roleId = request()->header('X-role-id');
        if ($roleId) {
            $role = RoleSQL::with('permissions')->where('id', (int)$roleId)->first();
            $this->setCurrentRole($role);
        } else {
            $this->setCurrentRole(null);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * @param RoleSQL|null $roleSQL
     *
     * @return $this
     */
    public function setCurrentRole(?RoleSQL $roleSQL = null): static
    {
        self::$currentRole = $roleSQL;

        return $this;
    }
}
