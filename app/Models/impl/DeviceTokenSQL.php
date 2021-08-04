<?php


namespace YaangVu\SisModel\App\Models\impl;


use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\DeviceToken;

/**
 * YaangVu\SisModel\App\Models\impl\DeviceTokenSQL
 *
 * @property int $id
 * @property string $type
 * @property int $user_id
 * @property string $device_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceTokenSQL whereUserId($value)
 * @mixin \Eloquent
 */
class DeviceTokenSQL extends Model implements DeviceToken
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['type', 'user_id', 'device_token'];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}