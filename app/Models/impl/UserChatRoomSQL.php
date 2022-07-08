<?php
/**
 * @Author im.phien
 * @Date   Jul 08, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\UserChatRoom;

/**
 * YaangVu\SisModel\App\Models\UserChatRoomSQL
 *
 * @property int         chat_room_id
 * @property int         $user_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|UserChatRoomSQL newQuery()
 * @method static Builder|UserChatRoomSQL query()
 * @method static Builder|UserChatRoomSQL whereCreatedAt($value)
 * @method static Builder|UserChatRoomSQL whereChatRoomId($value)
 * @method static Builder|UserChatRoomSQL whereUserId($value)
 * @method static Builder|UserChatRoomSQL whereCreatedBy($value)
 * @method static Builder|UserChatRoomSQL whereDeletedAt($value)
 * @method static Builder|UserChatRoomSQL whereUpdatedAt($value)
 */
class UserChatRoomSQL extends Model implements UserChatRoom
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

    protected $fillable = ['user_id', 'chat_room_id'];
}