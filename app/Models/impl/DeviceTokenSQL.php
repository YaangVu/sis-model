<?php


namespace YaangVu\SisModel\App\Models\impl;


use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\DeviceToken;

/**
 * YaangVu\SisModel\App\Models\impl\DeviceTokenSQL
 *
 * @property int         $id
 * @property string      $type
 * @property int         $user_id
 * @property string      $device_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|DeviceTokenSQL newModelQuery()
 * @method static Builder|DeviceTokenSQL newQuery()
 * @method static Builder|DeviceTokenSQL query()
 * @method static Builder|DeviceTokenSQL whereCreatedAt($value)
 * @method static Builder|DeviceTokenSQL whereDeviceToken($value)
 * @method static Builder|DeviceTokenSQL whereId($value)
 * @method static Builder|DeviceTokenSQL whereType($value)
 * @method static Builder|DeviceTokenSQL whereUpdatedAt($value)
 * @method static Builder|DeviceTokenSQL whereUserId($value)
 * @mixin Eloquent
 */
class DeviceTokenSQL extends Model implements DeviceToken
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['type', 'user_id', 'device_token'];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}