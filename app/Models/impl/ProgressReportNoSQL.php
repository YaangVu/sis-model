<?php

namespace YaangVu\SisModel\App\Models\impl;

use YaangVu\Constant\DbConnectionConstant;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\ProgressReport;


class ProgressReportNoSQL extends Model implements ProgressReport
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function inputter(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'inputter_id', '_id');
    }

    public function reviewer(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'reviewer_id', '_id');
    }
    
}






