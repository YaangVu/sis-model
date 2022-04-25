<?php

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Enrollment;
use Jenssegers\Mongodb\Eloquent\Model;



class EnrollmentNoSQL extends Model implements Enrollment
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

}
