<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ClassActivityCategory;

/**
 * YaangVu\SisModel\App\Models\impl\ClassActivityCategorySQL
 *
 * @property int                                       $id
 * @property string                                    $name
 * @property string                                    $weight
 * @property string|null                               $description
 * @property string|null                               $uuid
 * @property string|null                               $external_id
 * @property int|null                                  $activity_category_id
 * @property int                                       $class_id
 * @property Carbon|null                               $created_at
 * @property Carbon|null                               $updated_at
 * @property Carbon|null                               $deleted_at
 * @property bool|null                                 $is_default
 * @property float|null                                $max_point
 * @property-read Collection<int, ActivityClassLmsSQL> $activityClassLms
 * @property-read int|null                             $activity_class_lms_count
 * @method static Builder|ClassActivityCategorySQL newModelQuery()
 * @method static Builder|ClassActivityCategorySQL newQuery()
 * @method static Builder|ClassActivityCategorySQL onlyTrashed()
 * @method static Builder|ClassActivityCategorySQL query()
 * @method static Builder|ClassActivityCategorySQL whereActivityCategoryId($value)
 * @method static Builder|ClassActivityCategorySQL whereClassId($value)
 * @method static Builder|ClassActivityCategorySQL whereCreatedAt($value)
 * @method static Builder|ClassActivityCategorySQL whereDeletedAt($value)
 * @method static Builder|ClassActivityCategorySQL whereDescription($value)
 * @method static Builder|ClassActivityCategorySQL whereExternalId($value)
 * @method static Builder|ClassActivityCategorySQL whereId($value)
 * @method static Builder|ClassActivityCategorySQL whereIsDefault($value)
 * @method static Builder|ClassActivityCategorySQL whereMaxPoint($value)
 * @method static Builder|ClassActivityCategorySQL whereName($value)
 * @method static Builder|ClassActivityCategorySQL whereUpdatedAt($value)
 * @method static Builder|ClassActivityCategorySQL whereUuid($value)
 * @method static Builder|ClassActivityCategorySQL whereWeight($value)
 * @method static Builder|ClassActivityCategorySQL withTrashed()
 * @method static Builder|ClassActivityCategorySQL withoutTrashed()
 * @mixin Eloquent
 */
class ClassActivityCategorySQL extends Model implements ClassActivityCategory
{
    use HasFactory, SoftDeletes;

    protected $fillable
        = [
            'name', 'weight', 'description', 'school_id', 'activity_category_id', 'class_id', CodeConstant::UUID, CodeConstant::EX_ID, 'is_default', 'max_point'
        ];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    public function activityClassLms(): HasMany
    {
        return $this->hasMany(ActivityClassLmsSQL::class, 'class_activity_category_id');
    }
}