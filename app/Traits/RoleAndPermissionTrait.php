<?php


namespace YaangVu\SisModel\App\Traits;


use Exception;
use Illuminate\Database\Eloquent\Model as SqlModel;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\RoleConstant;
use YaangVu\LaravelBase\Services\impl\BaseService;
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
     * @return bool|null
     */
    public function hasAnyRole(...$roles): ?bool
    {
        foreach ($roles as $role)
            $decorRole[] = $this->decorateWithSchoolUuid($role);

        return BaseService::currentUser()?->hasAnyRole($decorRole ?? []);
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
    public function hasAnyPermission(...$permissions): ?bool
    {
        foreach ($permissions as $permission)
            $decorPermissions[] = $this->decorateWithSchoolUuid($permission);

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
            $decorPermissions[] = $this->decorateWithSchoolUuid($permission);

        return BaseService::currentUser()?->hasAllPermissions($decorPermissions ?? []);
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
                    ->where('roles.group', RoleConstant::STAFF)
                    ->where('model_has_roles.model_id', BaseService::currentUser()?->id)
                    ->first();

        return $role !== null;
    }

    /**
     * is this me?
     *
     * @param UserSQL|UserNoSQL $user
     *
     * @return bool
     */
    public function isMe(UserSQL|UserNoSQL $user): bool
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