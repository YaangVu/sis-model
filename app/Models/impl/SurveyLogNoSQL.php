<?php
/**
 * @Author Edogawa Conan
 * @Date   Jun 29, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SurveyLog;

class SurveyLogNoSQL extends Model implements SurveyLog
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'user_id', '_id');
    }

    public function survey(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(SurveyNoSql::class, 'survey_id', 'survey_id');
    }
}