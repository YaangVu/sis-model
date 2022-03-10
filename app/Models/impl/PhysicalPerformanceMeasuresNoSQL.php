<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\PhysicalPerformanceMeasures;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\SQLModel;

class PhysicalPerformanceMeasuresNoSQL extends Model implements PhysicalPerformanceMeasures
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
