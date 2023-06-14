<?php

namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Relations\BelongsTo as MBelongTo;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ClassAssignment;
use YaangVu\SisModel\App\Models\School;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\UserChatRoom;

/**
 * YaangVu\SisModel\App\Models\SchoolSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $year_founded Năm thành lập
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|SchoolSQL newModelQuery()
 * @method static Builder|SchoolSQL newQuery()
 * @method static Builder|SchoolSQL onlyTrashed()
 * @method static Builder|SchoolSQL query()
 * @method static Builder|SchoolSQL whereCreatedAt($value)
 * @method static Builder|SchoolSQL whereCreatedBy($value)
 * @method static Builder|SchoolSQL whereDeletedAt($value)
 * @method static Builder|SchoolSQL whereId($value)
 * @method static Builder|SchoolSQL whereName($value)
 * @method static Builder|SchoolSQL whereUpdatedAt($value)
 * @method static Builder|SchoolSQL whereYearFounded($value)
 * @method static Builder|SchoolSQL withTrashed()
 * @method static Builder|SchoolSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null $description
 * @method static Builder|SchoolSQL whereDescription($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|SchoolSQL whereExternalId($value)
 * @method static Builder|SchoolSQL whereUuid($value)
 * @property string|null $address
 * @property string|null $fax
 * @property string|null $principal
 * @property string|null $phone
 * @property string|null $timezone
 * @property-read \Illuminate\Database\Eloquent\Collection|\YaangVu\SisModel\App\Models\impl\ChatRoomSQL[] $chatRooms
 * @property-read int|null $chat_rooms_count
 * @method static Builder|SchoolSQL whereAddress($value)
 * @method static Builder|SchoolSQL whereFax($value)
 * @method static Builder|SchoolSQL wherePhone($value)
 * @method static Builder|SchoolSQL wherePrincipal($value)
 * @method static Builder|SchoolSQL whereTimezone($value)
 */
class SchoolSQL extends Model implements School
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $fillable = ['name', 'year_founded', CodeConstant::EX_ID, 'lms_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public $code = CodeConstant::UUID;

    protected $connection = DbConnectionConstant::SQL;

    public function schoolNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(SchoolNoSQL::class, CodeConstant::UUID, CodeConstant::UUID)
                                 ->whereNull('deleted_at');
    }

    public function chatRooms(): HasMany
    {
        return $this->hasMany(ChatRoomSQL::class,'school_id','id');
    }

}
