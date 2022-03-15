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

    protected $fillable
    = [
        'student_code', 'test_date', 'created_at', 'updated_at', '40_yard_dash_in_seconds', 'body_mass_index_in_percentage',
        'weight_in_pounds', 'squat_in_pounds', 'height_in_inches', 'benchpress_in_pounds', 'vertical_jump_in_inches'
    ];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_code', 'student_code');
    }
}
