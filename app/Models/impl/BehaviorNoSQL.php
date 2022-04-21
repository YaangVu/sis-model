<?php

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Behavior;
use Jenssegers\Mongodb\Eloquent\Model;



class BehaviorNoSQL extends Model implements Behavior
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

}
