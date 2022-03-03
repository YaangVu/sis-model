<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ReportACT;

class reportACTSQL extends Model implements ReportACT
{
    use HasFactory, SoftDeletes;


    protected $fillable = ['name'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;




}