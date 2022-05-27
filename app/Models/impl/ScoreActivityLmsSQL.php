<?php
/**
 * @Author kyhoang
 * @Date   May 27, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\impl\ActivityClassLmsSQL
 *
 * @property int         $id
 * @property string|null $score
 * @property string|null $user_nosql_id
 * @property string|null $user_id
 * @property int|null    $school_id
 * @property int|null    $max_point
 * @property int|null    $class_id
 * @property int|null    $class_activity_category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CalendarSQL newModelQuery()
 * @method static Builder|CalendarSQL newQuery()
 * @method static Builder|CalendarSQL query()
 * @method static Builder|CalendarSQL whereCreatedAt($value)
 * @method static Builder|CalendarSQL whereCreatedBy($value)
 * @method static Builder|CalendarSQL whereDeletedAt($value)
 * @method static Builder|CalendarSQL whereDescription($value)
 * @method static Builder|CalendarSQL whereId($value)
 * @method static Builder|CalendarSQL whereName($value)
 * @method static Builder|CalendarSQL whereMaxPoint($value)
 * @method static Builder|CalendarSQL whereClassId($value)
 * @method static Builder|CalendarSQL whereClassActivityCategoryId($value)
 * @method static Builder|CalendarSQL whereSchoolId($value)
 * @method static Builder|CalendarSQL whereWeight($value)
 * @method static Builder|CalendarSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|CalendarSQL whereExternalId($value)
 * @method static Builder|CalendarSQL whereUuid($value)
 * @method static Builder|ActivityCategorySQL onlyTrashed()
 * @method static Builder|ActivityCategorySQL withTrashed()
 * @method static Builder|ActivityCategorySQL withoutTrashed()
 * @property int|null $created_by
 */
class ScoreActivityLmsSQL extends Model
{
    use HasFactory;

    protected $fillable = ['score', 'user_nosql_id', 'user_id', 'class_id', 'activity_class_lms_id', 'school_id', CodeConstant::UUID,'created_by'];

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