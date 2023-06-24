<?php
/**
 * @Author kyhoang
 * @Date   May 27, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\impl\ActivityClassLmsSQL
 *
 * @property int                                                                     $id
 * @property string                                $name
 * @property int|null                              $max_point
 * @property int|null                              $class_id
 * @property int                                   $class_activity_category_id
 * @property string|null                           $description
 * @property int                                   $school_id
 * @property string|null                           $uuid
 * @property int|null                              $created_by
 * @property Carbon|null                           $created_at
 * @property Carbon|null                           $updated_at
 * @property-read ClassSQL|null                    $class
 * @property-read ClassActivityCategorySQL         $classActivityCategory
 * @property-read Collection|ScoreActivityLmsSQL[] $scoreActivity
 * @property-read int|null                         $score_activity_count
 * @method static Builder|ActivityClassLmsSQL newModelQuery()
 * @method static Builder|ActivityClassLmsSQL newQuery()
 * @method static Builder|ActivityClassLmsSQL query()
 * @method static Builder|ActivityClassLmsSQL whereClassActivityCategoryId($value)
 * @method static Builder|ActivityClassLmsSQL whereClassId($value)
 * @method static Builder|ActivityClassLmsSQL whereCreatedAt($value)
 * @method static Builder|ActivityClassLmsSQL whereCreatedBy($value)
 * @method static Builder|ActivityClassLmsSQL whereDescription($value)
 * @method static Builder|ActivityClassLmsSQL whereId($value)
 * @method static Builder|ActivityClassLmsSQL whereMaxPoint($value)
 * @method static Builder|ActivityClassLmsSQL whereName($value)
 * @method static Builder|ActivityClassLmsSQL whereSchoolId($value)
 * @method static Builder|ActivityClassLmsSQL whereUpdatedAt($value)
 * @method static Builder|ActivityClassLmsSQL whereUuid($value)
 * @mixin Eloquent
 */
class ActivityClassLmsSQL extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'max_point', 'class_id', 'class_activity_category_id', 'description', 'school_id', CodeConstant::UUID];

    protected $table = 'activity_class_lms';

    protected $connection = DbConnectionConstant::SQL;

    public function class(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ClassSQL::class, 'class_id', 'id');
    }

    public function classActivityCategory(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ClassActivityCategorySQL::class, 'class_activity_category_id', 'id');
    }

    public function scoreActivity(): HasMany
    {
        return $this->hasMany(ScoreActivityLmsSQL::class, 'activity_class_lms_id');
    }
}