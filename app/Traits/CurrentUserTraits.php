<?php


namespace YaangVu\SisModel\App\Traits;


use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Exceptions\SystemException;
use YaangVu\LaravelBase\Services\impl\BaseService;
use YaangVu\SisModel\App\Models\impl\UserSQL;

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
        return $this->currentUserSql()->hasAnyRole($roles);
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
        return $this->currentUserSql()->hasAllRoles($roles);
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
        return $this->currentUserSql()->hasAnyPermission($permissions);
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
        return $this->currentUserSql()->hasAllPermissions($permissions);
    }

    /**
     * get current user sql
     * @return Model|Builder|UserSQL
     */
    public function currentUserSql(): Model|Builder|UserSQL
    {
        try {
            $username = BaseService::currentUser()?->username;

            return UserSQL::whereUsername($username)->firstOrFail();
        } catch (Exception $e) {
            throw new SystemException($e->getMessage() ?? __('system-500'), $e);
        }
    }
}