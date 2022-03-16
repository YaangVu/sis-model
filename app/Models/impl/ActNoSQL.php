<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Act;
use YaangVu\SisModel\App\Models\MongoModel;


class ActNoSQL extends MongoModel implements Act
{
    use HasFactory;


    protected $fillable = ['*'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_code', 'student_code');
    }


}