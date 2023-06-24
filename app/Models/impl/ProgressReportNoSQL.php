<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ProgressReport;


class ProgressReportNoSQL extends Model implements ProgressReport
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function inputter(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'inputter_id', '_id');
    }

    public function reviewer(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'reviewer_id', '_id');
    }

    public function term(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(TermSQL::class, 'term_id', 'id');
    }

    public function program(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(ProgramSQL::class, 'program_id', 'id');
    }

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_id', '_id');
    }
}






