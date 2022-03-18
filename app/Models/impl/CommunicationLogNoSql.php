<?php
/**
 * @Author Dung
 * @Date   Mar 18, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\CommunicationLog;
use YaangVu\SisModel\App\Models\MongoModel;

class CommunicationLogNoSql extends MongoModel implements CommunicationLog
{
    use HasFactory;


    protected $fillable = ['*'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;
}