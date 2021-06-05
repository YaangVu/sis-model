<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Laravel\Lumen\Auth\Authorizable;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use YaangVu\Constant\CodeConstant;


/**
 * App\Models\impl\UserSQL
 *
 * @property int                          $id
 * @property string                       $username
 * @property string|null                  $uid
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property Carbon|null                  $deleted_at
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @property-read Collection|Role[]       $roles
 * @property-read int|null                $roles_count
 * @method static Builder|UserSQL newModelQuery()
 * @method static Builder|UserSQL newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserSQL onlyTrashed()
 * @method static Builder|UserSQL permission($permissions)
 * @method static Builder|UserSQL query()
 * @method static Builder|UserSQL role($roles, $guard = null)
 * @method static Builder|UserSQL whereCreatedAt($value)
 * @method static Builder|UserSQL whereDeletedAt($value)
 * @method static Builder|UserSQL whereId($value)
 * @method static Builder|UserSQL whereUid($value)
 * @method static Builder|UserSQL whereUpdatedAt($value)
 * @method static Builder|UserSQL whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|UserSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserSQL withoutTrashed()
 * @mixin Eloquent
 */
class UserSQL extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory, HasRoles, SoftDeletes;

    public static string $guard_name = 'api';

    protected $table = 'users';

    public string $code = CodeConstant::UID;

}
