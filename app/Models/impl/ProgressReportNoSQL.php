<?php

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\ProgressReport;


class ProgressReportNoSQL extends Model implements ProgressReport
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
    
}






