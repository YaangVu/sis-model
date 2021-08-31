<?php
/**
 * @Author Edogawa Conan
 * @Date   Aug 24, 2021
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Spatie\Permission\Models\Permission;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Role;

/**
 * YaangVu\SisModel\App\Models\RoleSQL
 *
 * @property int                          $id
 * @property string                       $name
 * @property string|null                  $guard_name
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property string|null                  $group
 * @property string|null                  $status
 * @property string|null                  $description
 * @method static Builder|RoleSQL newModelQuery()
 * @method static Builder|RoleSQL newQuery()
 * @method static Builder|RoleSQL onlyTrashed()
 * @method static Builder|RoleSQL query()
 * @method static Builder|RoleSQL whereCreatedAt($value)
 * @method static Builder|RoleSQL whereGuardName($value)
 * @method static Builder|RoleSQL whereStatus($value)
 * @method static Builder|RoleSQL whereId($value)
 * @method static Builder|RoleSQL whereName($value)
 * @method static Builder|RoleSQL whereUpdatedAt($value)
 * @method static Builder|RoleSQL whereGroup($value)
 * @method static Builder|RoleSQL whereDescription($value)
 * @method static Builder|RoleSQL withTrashed()
 * @method static Builder|RoleSQL withoutTrashed()
 * @mixin Eloquent
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @method static Builder|Role permission($permissions)
 * @property int|null $created_by
 * @property-read Collection|\YaangVu\SisModel\App\Models\impl\UserSQL[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|RoleSQL whereCreatedBy($value)
 */
class RoleSQL extends \Spatie\Permission\Models\Role implements Role
{
    protected $table = self::table;

    protected $guarded = [];

    protected $fillable = ['name', 'guard_name', 'group', 'status', 'description'];

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