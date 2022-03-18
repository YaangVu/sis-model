<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\Sat;
use YaangVu\Constant\DbConnectionConstant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SatNoSql extends Model implements Sat
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_code', 'student_code');
    }
}
