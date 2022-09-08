<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SchoolYear;

class SchoolYearNoSQL extends Model implements SchoolYear
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}
