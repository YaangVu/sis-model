<?php
/**
 * @Author im.phien
 * @Date   Jul 08, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\UserChatRoom;

/**
 * YaangVu\SisModel\App\Models\impl\UserChatRoomSQL
 *
 * @property int         $chat_room_id
 * @property int         $user_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null    $unread
 * @method static Builder|UserChatRoomSQL newModelQuery()
 * @method static Builder|UserChatRoomSQL newQuery()
 * @method static Builder|UserChatRoomSQL query()
 * @method static Builder|UserChatRoomSQL whereChatRoomId($value)
 * @method static Builder|UserChatRoomSQL whereCreatedAt($value)
 * @method static Builder|UserChatRoomSQL whereCreatedBy($value)
 * @method static Builder|UserChatRoomSQL whereUnread($value)
 * @method static Builder|UserChatRoomSQL whereUpdatedAt($value)
 * @method static Builder|UserChatRoomSQL whereUserId($value)
 * @mixin Eloquent
 */
class UserChatRoomSQL extends Model implements UserChatRoom
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

    protected $fillable = ['user_id', 'chat_room_id', 'unread'];
}
