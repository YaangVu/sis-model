<?php
/**
 * @Author apple
 * @Date   Jun 09, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\RoomSetting;

class RoomSettingNoSQL extends Model implements RoomSetting
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}