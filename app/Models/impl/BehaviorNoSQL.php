<?php

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Behavior;
use YaangVu\SisModel\App\Models\MongoModel;



class BehaviorNoSQL extends MongoModel implements Behavior
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

}
