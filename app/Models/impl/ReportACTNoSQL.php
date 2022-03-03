<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\ReportACT;
use YaangVu\SisModel\Database\Factories\ACTFactory;

/**
 * @method static \YaangVu\SisModel\Database\Factories\ACTFactory factory(...$parameters)
 */
class ReportACTNoSQL extends MongoModel implements ReportACT
{
    use HasFactory;


    protected $fillable = ['*'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    public static function newFactory(): ACTFactory
    {
        return new ACTFactory();
    }
}