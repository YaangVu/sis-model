<?php
/**
 * @Author im.phien
 * @Date   Jul 26, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ChatRoom;

/**
 * @property int         $id
 * @property string      $uuid
 * @property array|null  $member_setting
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @method static Builder|ChatRoomNoSQL newModelQuery()
 * @method static Builder|ChatRoomNoSQL newQuery()
 * @method static Builder|ChatRoomNoSQL query()
 * @method static Builder|ChatRoomNoSQL whereCreatedAt($value)
 * @method static Builder|ChatRoomNoSQL whereCreatedBy($value)
 * @method static Builder|ChatRoomNoSQL whereMemberSetting($value)
 * @method static Builder|ChatRoomNoSQL whereUuid($value)
 * @method static Builder|ChatRoomNoSQL whereId($value)
 * @mixin Eloquent
 */

class ChatRoomNoSQL extends Model implements ChatRoom
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function createdBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'create_by', '_id');
    }
}