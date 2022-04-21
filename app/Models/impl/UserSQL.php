<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Relations\BelongsTo as MBelongTo;
use Laravel\Lumen\Auth\Authorizable;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\Constant\StatusConstant;
use YaangVu\SisModel\App\Models\ClassAssignment;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\User;
use YaangVu\SisModel\App\Models\UserParent;


/**
 * YaangVu\SisModel\App\Models\UserSQL
 *
 * @property int                          $id
 * @property string                       $username
 * @property string|null                  $uuid
 * @property int|null                     $grade_id
 * @property int|null                     $division_id
 * @property int|null                     $created_by
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property Carbon|null                  $deleted_at
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @property-read Collection|Role[]       $roles
 * @property-read int|null                $roles_count
 * @method static Builder|UserSQL newModelQuery()
 * @method static Builder|UserSQL newQuery()
 * @method static Builder|UserSQL onlyTrashed()
 * @method static Builder|UserSQL permission($permissions)
 * @method static Builder|UserSQL query()
 * @method static Builder|UserSQL role($roles, $guard = null)
 * @method static Builder|UserSQL whereCreatedAt($value)
 * @method static Builder|UserSQL whereCreatedBy($value)
 * @method static Builder|UserSQL whereDeletedAt($value)
 * @method static Builder|UserSQL whereDivisionId($value)
 * @method static Builder|UserSQL whereGradeId($value)
 * @method static Builder|UserSQL whereId($value)
 * @method static Builder|UserSQL whereUpdatedAt($value)
 * @method static Builder|UserSQL whereUsername($value)
 * @method static Builder|UserSQL withTrashed()
 * @method static Builder|UserSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null                  $external_id
 * @method static Builder|UserSQL whereExternalId($value)
 * @method static Builder|UserSQL whereUuid($value)
 * @property-read Collection|ClassSQL[]   $classes
 * @property-read int|null                $classes_count
 * @property-read UserNoSQL|null          $userNoSql
 */
class UserSQL extends Model implements User
{
    use Authenticatable, Authorizable, HasFactory, HasRoles, SoftDeletes;

    public string $code = CodeConstant::UUID;
    protected $connection = DbConnectionConstant::SQL;
    protected $table = self::table;
    protected string $guard_name = 'api';
    protected $fillable = ['username', CodeConstant::UUID];

    public function userNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, CodeConstant::UUID, CodeConstant::UUID)
                                 ->whereNull('deleted_at');
    }

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(ClassSQL::class, ClassAssignment::table, 'user_id', 'class_id');
    }

    public function studentsNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, CodeConstant::UUID, CodeConstant::UUID)
                                 ->where('study_status', StatusConstant::STUDYING)
                                 ->whereNull('deleted_at');
    }

    public function user()
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(UserSQL::class, UserParent::table, 'children_id', 'parent_id');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(UserSQL::class, UserParent::table, 'parent_id', 'children_id');
    }

    public function schools(): BelongsToMany
    {
        return $this->belongsToMany(SchoolSQL::class, UserParent::table, 'children_id', 'school_id');
    }
}
