<?php

namespace YaangVu\SisModel\App\Models\impl;


use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\LmsProgram;

class LmsProgramSQL extends Model implements LmsProgram
{
    use SoftDeletes;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}
