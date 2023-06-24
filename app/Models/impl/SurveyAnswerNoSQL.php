<?php
/**
 * @Author Edogawa Conan
 * @Date   May 29, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Carbon\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SurveyAnswer;

/**
 * Created by PhpStorm.
 * User: Edogawa Conan
 * Date: 5/30/2022
 * Time: 10:25 AM
 * @property int         $id
 * @property string|null $uuid
 * @property int         $createdBy
 * @property string      $surveyId
 * @property Carbon      $createdAt
 * @property Carbon      $updatedAt
 * @method static Builder|CommunicationLogNoSql newModelQuery()
 * @method static Builder|CommunicationLogNoSql newQuery()
 * @method static Builder|CommunicationLogNoSql query()
 * @method static Builder|CommunicationLogNoSql whereCreatedAt($value)
 * @method static Builder|CommunicationLogNoSql whereCreatedBy($value)
 * @method static Builder|CommunicationLogNoSql whereDeletedAt($value)
 * @method static Builder|CommunicationLogNoSql withTrashed()
 * @method static Builder|CommunicationLogNoSql withoutTrashed()
 */
class SurveyAnswerNoSQL extends Model implements SurveyAnswer
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function createdBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function survey(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(SurveyNoSql::class, 'survey_id', '_id');
    }
}
