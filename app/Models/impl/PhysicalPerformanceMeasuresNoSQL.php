<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\PhysicalPerformanceMeasures;
use Jenssegers\Mongodb\Eloquent\Model;

class PhysicalPerformanceMeasuresNoSQL extends Model implements PhysicalPerformanceMeasures
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
    protected $guarded = [];
}
