<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

class SQLModel extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = [];

    protected $guarded = [];
}