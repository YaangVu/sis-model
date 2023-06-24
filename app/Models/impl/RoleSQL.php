<?php
/**
 * @Author Edogawa Conan
 * @Date   Aug 24, 2021
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Permission;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Role;

/**
 * YaangVu\SisModel\App\Models\impl\RoleSQL
 *
 * @property int                                                         $id
 * @property string                                                      $name
 * @property string                                                      $guard_name
 * @property string|null                  $group
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property string                       $status
 * @property string|null                  $description
 * @property int|null                     $created_by
 * @property bool                         $is_mutable
 * @property int|null                     $priority
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @property-read Collection|UserSQL[]    $users
 * @property-read int|null                $users_count
 * @method static Builder|RoleSQL newModelQuery()
 * @method static Builder|RoleSQL newQuery()
 * @method static Builder|Role permission($permissions)
 * @method static Builder|RoleSQL query()
 * @method static Builder|RoleSQL whereCreatedAt($value)
 * @method static Builder|RoleSQL whereCreatedBy($value)
 * @method static Builder|RoleSQL whereDescription($value)
 * @method static Builder|RoleSQL whereGroup($value)
 * @method static Builder|RoleSQL whereGuardName($value)
 * @method static Builder|RoleSQL whereId($value)
 * @method static Builder|RoleSQL whereIsMutable($value)
 * @method static Builder|RoleSQL whereName($value)
 * @method static Builder|RoleSQL wherePriority($value)
 * @method static Builder|RoleSQL whereStatus($value)
 * @method static Builder|RoleSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class RoleSQL extends \Spatie\Permission\Models\Role implements Role
{
    protected $table = self::table;

    protected $guarded = [];

    protected $fillable = ['name', 'guard_name', 'group', 'status', 'description', 'is_mutable', 'priority'];

    protected $connection = DbConnectionConstant::SQL;

    public function getNameAttribute(string $name): string
    {
        if (!str_contains($name, ':'))
            return $name;

        [$scID, $decorName] = explode(':', $name);

        return $decorName;
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(UserSQL::class, 'model_has_roles', 'role_id', 'model_id');
    }
}