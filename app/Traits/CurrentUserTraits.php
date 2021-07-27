<?php


namespace YaangVu\SisModel\App\Traits;


use Exception;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\RoleConstant;
use YaangVu\LaravelBase\Services\impl\BaseService;
use YaangVu\SisModel\App\Providers\SchoolServiceProvider;

trait CurrentUserTraits
{
    /**
     * check any role with user sql
     *
     * @param ...$roles
     *
     * @return bool|null
     */
    public function hasAnyRoles(...$roles): ?bool
    {
        foreach ($roles as $role)
            $decorRole[] = $this->_decorateWithSchoolUuid($role);

        return BaseService::currentUser()?->hasAnyRole($decorRole ?? []);
    }

    /**
     * check user sql has all roles ?
     *
     * @param ...$roles
     *
     * @return bool|null
     */
    public function hasAllRole(...$roles): ?bool
    {
        foreach ($roles as $role)
            $decorRole[] = $this->_decorateWithSchoolUuid($role);

        return BaseService::currentUser()?->hasAllRoles($decorRole ?? []);
    }

    /**
     * check current user has any permissions ?
     *
     * @param mixed ...$permissions
     *
     * @return bool|null
     * @throws Exception
     */
    public function hasAnyPermissions(...$permissions): ?bool
    {
        foreach ($permissions as $permission)
            $decorPermissions[] = $this->_decorateWithSchoolUuid($permission);

        return BaseService::currentUser()?->hasAnyPermission($decorPermissions ?? []);
    }

    /**
     * check user sql has all permissions ?
     *
     * @param ...$permissions
     *
     * @return bool|null
     * @throws Exception
     */
    public function hasAllPermissions(...$permissions): ?bool
    {
        foreach ($permissions as $permission)
            $decorPermissions[] = $this->_decorateWithSchoolUuid($permission);

        return BaseService::currentUser()?->hasAllPermissions($decorPermissions ?? []);
    }

    /**
     * check current user is student ?
     * @return bool|null
     */
    public function isStudent(): ?bool
    {
        return $this->hasAnyRoles(RoleConstant::STUDENT);
    }

    /**
     * check current user is staff
     * @return bool
     */
    public function isStaff(): bool
    {
        $role = Role::select('roles.*')
                    ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                    ->join('users', 'users.id', '=', 'model_has_roles.model_id')
                    ->where('role.group', RoleConstant::STAFF)
                    ->where('model_has_roles.model_id', BaseService::currentUser()->id)
                    ->first();

        return $role !== null;
    }

    /**
     * decorate value with school uuid
     *
     * @param $value
     *
     * @return string
     */
    private function _decorateWithSchoolUuid($value): string
    {
        return SchoolServiceProvider::$currentSchool->uuid . ':' . $value;
    }
}