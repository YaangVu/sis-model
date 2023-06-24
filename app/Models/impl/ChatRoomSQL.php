<?php
/**
 * @Author im.phien
 * @Date   Fir 8, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ChatRoom;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\UserChatRoom;

/**
 * YaangVu\SisModel\App\Models\impl\ChatRoomSQL
 *
 * @property int                           $id
 * @property string|null                   $room_id
 * @property int|null                      $created_by
 * @property string|null                   $type
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property int|null                      $school_id
 * @property string|null                   $name
 * @property string|null                   $image
 * @property string|null                   $uuid
 * @property string|null                   $last_message
 * @property string|null                   $last_message_at
 * @property-read Collection<int, UserSQL> $users
 * @property-read int|null                 $users_count
 * @method static Builder|ChatRoomSQL newModelQuery()
 * @method static Builder|ChatRoomSQL newQuery()
 * @method static Builder|ChatRoomSQL query()
 * @method static Builder|ChatRoomSQL whereCreatedAt($value)
 * @method static Builder|ChatRoomSQL whereCreatedBy($value)
 * @method static Builder|ChatRoomSQL whereId($value)
 * @method static Builder|ChatRoomSQL whereImage($value)
 * @method static Builder|ChatRoomSQL whereLastMessage($value)
 * @method static Builder|ChatRoomSQL whereLastMessageAt($value)
 * @method static Builder|ChatRoomSQL whereName($value)
 * @method static Builder|ChatRoomSQL whereRoomId($value)
 * @method static Builder|ChatRoomSQL whereSchoolId($value)
 * @method static Builder|ChatRoomSQL whereType($value)
 * @method static Builder|ChatRoomSQL whereUpdatedAt($value)
 * @method static Builder|ChatRoomSQL whereUuid($value)
 * @mixin Eloquent
 */
class ChatRoomSQL extends Model implements ChatRoom
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['room_id', 'created_by', 'type', 'school_id', 'name', 'image', 'uuid', 'last_message', 'last_message_at'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(UserSql::class, UserChatRoom::table, 'chat_room_id', 'user_id');
    }

    public function chatRoomNoSql(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return (new MongoModel())->belongsTo(ChatRoomNoSQL::class, CodeConstant::UUID, CodeConstant::UUID)
                                 ->whereNull('deleted_at');
    }
}
