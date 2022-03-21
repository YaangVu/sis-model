<?php
/**
 * @Author Pham Van Tien
 * @Date   Mar 21, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\Toefl;

class ToeflNoSql extends MongoModel implements Toefl
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}