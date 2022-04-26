<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Enrollment;
use YaangVu\SisModel\App\Models\SQLModel;


class EnrollmentNoSQL extends Model implements Enrollment
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function grade(): BelongsTo
    {
        return (new SQLModel())->belongsTo(GradeSQL::class, 'grade_id', 'id');
    }

}
