<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\Sbac;




class SbacNoSQL extends MongoModel implements Sbac
{
    use HasFactory, SoftDeletes;

    public string $code       = CodeConstant::UUID;
    protected     $connection = DbConnectionConstant::NOSQL;
    protected     $table      = self::table;
    protected     $fillable   = ['*'];

    protected $guarded = [];


}