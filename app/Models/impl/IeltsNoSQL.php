<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Ielts;
use YaangVu\SisModel\App\Models\MongoModel;


class IeltsNoSQL extends MongoModel implements Ielts
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_uuid', 'uuid');
    }
}
