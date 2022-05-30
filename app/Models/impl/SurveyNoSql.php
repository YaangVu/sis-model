<?php
/**
 * @Author Admin
 * @Date   May 26, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Survey;

/**
 * Class GraduationNoSql
 * @author  hoangky <hoangky@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $effective_end_date
 * @property array|null  $respondent_setting
 * @property array|null  $questions_answer
 * @property string|null $sent_date
 * @property string|null $created_by
 * @package YaangVu\SisModel\App\Models\impl
 * @category
 */
class SurveyNoSql extends Model implements Survey
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function staff(): \Illuminate\Database\Eloquent\Relations\BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'create_by', '_id');
    }

}