<?php


namespace YaangVu\SisModel\App\Traits;


use Illuminate\Database\Eloquent\Model as SqlModel;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\RoleConstant;
use YaangVu\Constant\StatusConstant;
use YaangVu\LaravelBase\Services\impl\BaseService;
use YaangVu\SisModel\App\Models\impl\RoleSQL;
use YaangVu\SisModel\App\Models\impl\UserNoSQL;
use YaangVu\SisModel\App\Models\impl\UserSQL;
use YaangVu\SisModel\App\Providers\SchoolServiceProvider;

trait RoleAndPermissionTrait
{
    /**
     * check any role with user sql
     *
     * @param ...$roles
     *
     * @return bool
     */
    public function hasAnyRole(...$roles): bool
    {
        foreach ($roles as $role)
            $decorRole[] = $this->decorateWithSchoolUuid($role);

        $roleCount = $this->countCurrentRoleViaName($decorRole ?? []);

        return $roleCount > 0;
    }

    /**
     * check has any role and god
     *
     * @param ...$roles
     *
     * @return bool|null
     */
    public function hasAnyRoleWithGod(...$roles): ?bool
    {
        if ($this->isGod())
            return true;

        return $this->hasAnyRole(implode(',', $roles));
    }

    /**
     * check user sql has all roles ?
     *
     * @param ...$roles
     *
     * @return bool|null
     */
    public function hasAllRoles(...$roles): ?bool
    {
        foreach ($roles as $role)
            $decorRole[] = $this->decorateWithSchoolUuid($role);

        $roleCount = $this->countCurrentRoleViaName($decorRole ?? []);

        return $roleCount === count($decorRole ?? []);
    }

    /**
     * check user sql has all roles and god ?
     *
     * @param ...$roles
     *
     * @return bool|null
     */
    public function hasAllRolesWithGod(...$roles): ?bool
    {
        if ($this->isGod())
            return true;

        return $this->hasAllRoles(implode(',', $roles));
    }

    private function countCurrentRoleViaName(array $roleName): int
    {
        return RoleSQL::whereStatus(StatusConstant::ACTIVE)
                      ->join('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
                      ->where('model_has_roles.model_id', BaseService::currentUser()?->id)
                      ->whereIn('roles.name', $roleName)
                      ->count();
    }

    /**
     * check current user has any permissions ?
     *
     * @param $permissionName
     *
     * @return bool
     */
    public function hasPermission($permissionName): bool
    {
        if ($this->isGod())
            return true;

        $permission = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=',
                                       'permissions.id')
                                ->join('roles', 'role_has_permissions.role_id', '=', 'roles.id')
                                ->join('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
                                ->where('roles.status', StatusConstant::ACTIVE)
                                ->where('model_has_roles.model_id', BaseService::currentUser()?->id)
                                ->where('permissions.name', $permissionName)
                                ->first();

        return isset($permission);
    }

    /**
     * check current user is student ?
     * @return bool|null
     */
    public function isStudent(): ?bool
    {
        return $this->hasAnyRole(RoleConstant::STUDENT);
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
                    ->where('name','LIKE','%'.SchoolServiceProvider::$currentSchool->uuid . ':%')
                    ->where('roles.group', RoleConstant::STAFF)
                    ->where('model_has_roles.model_id', BaseService::currentUser()?->id)
                    ->first();

        return $role !== null;
    }

    /**
     * is God role ?
     * @return bool|null
     */
    public function isGod(): ?bool
    {
        return BaseService::currentUser()?->hasAnyRole(RoleConstant::GOD, RoleConstant::ADMIN);
    }

    /**
     * is this me?
     *
     * @param UserSQL|UserNoSQL|MongoModel|SqlModel $user
     *
     * @return bool
     */
    public function isMe(UserSQL|UserNoSQL|MongoModel|SqlModel $user): bool
    {
        return $user->uuid == BaseService::currentUser()?->uuid;
    }

    /**
     * is this mine?
     *
     * @param MongoModel|SqlModel $model
     *
     * @return bool
     */
    public function isMine(MongoModel|SqlModel $model): bool
    {
        return Schema::hasColumn($model->getTable(), 'created_by')
            && ($model->{'created_by'} ?? null) == BaseService::currentUser()?->id;
    }

    /**
     * decorate value with school uuid
     *
     * @param $value
     *
     * @return string
     */
    public function decorateWithSchoolUuid($value): string
    {
        return SchoolServiceProvider::$currentSchool->uuid . ':' . $value;
    }
}
