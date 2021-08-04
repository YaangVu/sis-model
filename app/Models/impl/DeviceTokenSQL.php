<?php


namespace YaangVu\SisModel\App\Models\impl;


use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\DeviceToken;

class DeviceTokenSQL extends Model implements DeviceToken
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['type', 'user_id', 'device_token'];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}