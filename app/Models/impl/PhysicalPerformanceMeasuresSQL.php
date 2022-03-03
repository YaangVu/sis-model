<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\PhysicalPerformanceMeasures;

class PhysicalPerformanceMeasuresSQL extends Model implements PhysicalPerformanceMeasures
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    public function User(): BelongsTo
    {
        return $this->BelongsTo(UserSQL::class, 'student_code');
    }
}
