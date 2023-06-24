<?php
/**
 * @Author kyhoang
 * @Date   May 27, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\impl\ScoreActivityLmsSQL
 *
 * @property int                                                             $id
 * @property float|null                    $score
 * @property string|null                   $user_nosql_id
 * @property int                           $user_id
 * @property int                           $class_id
 * @property int|null                      $activity_class_lms_id
 * @property int                           $school_id
 * @property int                           $created_by
 * @property string|null                   $uuid
 * @property Carbon|null                   $created_at
 * @property Carbon|null                   $updated_at
 * @property-read ActivityClassLmsSQL|null $activityClassLms
 * @property-read ClassSQL                 $class
 * @property-read UserSQL                  $createdBy
 * @property-read UserSQL                  $user
 * @method static Builder|ScoreActivityLmsSQL newModelQuery()
 * @method static Builder|ScoreActivityLmsSQL newQuery()
 * @method static Builder|ScoreActivityLmsSQL query()
 * @method static Builder|ScoreActivityLmsSQL whereActivityClassLmsId($value)
 * @method static Builder|ScoreActivityLmsSQL whereClassId($value)
 * @method static Builder|ScoreActivityLmsSQL whereCreatedAt($value)
 * @method static Builder|ScoreActivityLmsSQL whereCreatedBy($value)
 * @method static Builder|ScoreActivityLmsSQL whereId($value)
 * @method static Builder|ScoreActivityLmsSQL whereSchoolId($value)
 * @method static Builder|ScoreActivityLmsSQL whereScore($value)
 * @method static Builder|ScoreActivityLmsSQL whereUpdatedAt($value)
 * @method static Builder|ScoreActivityLmsSQL whereUserId($value)
 * @method static Builder|ScoreActivityLmsSQL whereUserNosqlId($value)
 * @method static Builder|ScoreActivityLmsSQL whereUuid($value)
 * @mixin Eloquent
 */
class ScoreActivityLmsSQL extends Model
{
    use HasFactory;

    protected $fillable = ['score', 'user_nosql_id', 'user_id', 'class_id', 'activity_class_lms_id', 'school_id', CodeConstant::UUID, 'created_by'];

    protected $table = 'score_activity_lms';

    protected $connection = DbConnectionConstant::SQL;

    public function class(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ClassSQL::class, 'class_id', 'id');
    }

    public function createdBy(): BelongsTo
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function user(): BelongsTo
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'user_id', 'id');
    }

    public function activityClassLms(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ActivityClassLmsSQL::class, 'activity_class_lms_id', 'id');
    }
}