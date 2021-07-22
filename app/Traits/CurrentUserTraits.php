<?php


namespace YaangVu\SisModel\App\Traits;


use Exception;
use YaangVu\LaravelBase\Services\impl\BaseService;

trait CurrentUserTraits
{
    /**
     * check any role with user sql
     *
     * @param ...$roles
     *
     * @return bool
     */
    public function hasAnyRoles(...$roles): bool
    {
        return BaseService::currentUser()->hasAnyRole($roles);
    }

    /**
     * check user sql has all roles ?
     *
     * @param ...$roles
     *
     * @return bool
     */
    public function hasAllRole(...$roles): bool
    {
        return BaseService::currentUser()->hasAllRoles($roles);
    }

    /**
     * check any permission with user sql
     *
     * @param ...$roles
     *
     * @return bool
     * @throws Exception
     */
    public function hasAnyPermissions(...$permissions): bool
    {
        return BaseService::currentUser()->hasAnyPermission($permissions);
    }

    /**
     * check user sql has all permissions ?
     *
     * @param ...$permissions
     *
     * @return bool
     * @throws Exception
     */
    public function hasAllPermissions(...$permissions): bool
    {
        return BaseService::currentUser()->hasAllPermissions($permissions);
    }
}