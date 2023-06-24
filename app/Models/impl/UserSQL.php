<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
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
use YaangVu\SisModel\App\Models\UserChatRoom;
use YaangVu\SisModel\App\Models\UserParent;
use YaangVu\SisModel\App\Models\UserProgram;


/**
 * YaangVu\SisModel\App\Models\impl\UserSQL
 *
 * @property int                               $id
 * @property string|null                       $uuid
 * @property string|null                       $external_id
 * @property string                            $username
 * @property int|null                          $created_by
 * @property Carbon|null                       $created_at
 * @property Carbon|null                       $updated_at
 * @property Carbon|null                       $deleted_at
 * @property-read Collection<int, ChatRoomSQL> $chatRooms
 * @property-read int|null                     $chat_rooms_count
 * @property-read Collection<int, ClassSQL>    $classes
 * @property-read int|null                     $classes_count
 * @property-read Collection<int, UserSQL>     $parents
 * @property-read int|null                     $parents_count
 * @property-read Collection<int, Permission>  $permissions
 * @property-read int|null                     $permissions_count
 * @property-read Collection<int, ProgramSQL>  $programs
 * @property-read int|null                     $programs_count
 * @property-read Collection<int, Role>        $roles
 * @property-read int|null                     $roles_count
 * @property-read Collection<int, UserSQL>     $students
 * @property-read int|null                     $students_count
 * @method static Builder|UserSQL newModelQuery()
 * @method static Builder|UserSQL newQuery()
 * @method static Builder|UserSQL onlyTrashed()
 * @method static Builder|UserSQL permission($permissions)
 * @method static Builder|UserSQL query()
 * @method static Builder|UserSQL role($roles, $guard = null)
 * @method static Builder|UserSQL whereCreatedAt($value)
 * @method static Builder|UserSQL whereCreatedBy($value)
 * @method static Builder|UserSQL whereDeletedAt($value)
 * @method static Builder|UserSQL whereExternalId($value)
 * @method static Builder|UserSQL whereId($value)
 * @method static Builder|UserSQL whereUpdatedAt($value)
 * @method static Builder|UserSQL whereUsername($value)
 * @method static Builder|UserSQL whereUuid($value)
 * @method static Builder|UserSQL withTrashed()
 * @method static Builder|UserSQL withoutTrashed()
 * @mixin Eloquent
 */
class UserSQL extends Model implements User
{
    use Authenticatable, Authorizable, HasFactory, HasRoles, SoftDeletes;

    public string    $code       = CodeConstant::UUID;
    protected        $connection = DbConnectionConstant::SQL;
    protected        $table      = self::table;
    protected string $guard_name = 'api';
    protected        $fillable   = ['username', CodeConstant::UUID];

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

    public function programs(): BelongsToMany
    {
        return $this->belongsToMany(ProgramSQL::class, UserProgram::table, 'user_id', 'program_id');
    }

    public function chatRooms(): BelongsToMany
    {
        return $this->belongsToMany(ChatRoomSQL::class, UserChatRoom::table, 'user_id', 'chat_room_id');
    }
}
