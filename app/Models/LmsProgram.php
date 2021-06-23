<?php

namespace YaangVu\SisModel\App\Models;


use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Traits\SetFillable;

class LmsProgram extends Model
{
    use SetFillable, SoftDeletes;

    protected $table = 'lms_programs';

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}
