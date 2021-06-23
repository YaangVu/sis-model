<?php

namespace YaangVu\SisModel\App\Models;


use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;

class LmsProgram extends Model
{
    use SoftDeletes;

    protected $table = 'lms_programs';

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}
