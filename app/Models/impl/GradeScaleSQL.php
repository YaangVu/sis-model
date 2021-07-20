<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\GradeLetter;
use YaangVu\SisModel\App\Models\GradeScale;
use YaangVu\SisModel\App\Models\GradeScale1;

/**
 * YaangVu\SisModel\App\Models\GradeScaleSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GradeScale1 newModelQuery()
 * @method static Builder|GradeScale1 newQuery()
 * @method static Builder|GradeScale1 query()
 * @method static Builder|GradeScale1 whereCreatedAt($value)
 * @method static Builder|GradeScale1 whereCreatedBy($value)
 * @method static Builder|GradeScale1 whereDeletedAt($value)
 * @method static Builder|GradeScale1 whereDescription($value)
 * @method static Builder|GradeScale1 whereId($value)
 * @method static Builder|GradeScale1 whereName($value)
 * @method static Builder|GradeScale1 whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|GradeScale1 onlyTrashed()
 * @method static Builder|GradeScale1 withTrashed()
 * @method static Builder|GradeScale1 withoutTrashed()
 * @property boolean     $is_calculate_gpa
 * @method static Builder|Program whereIsCalculateGpa($value)
 * @property float       $score_to_pass
 * @method static Builder|Program whereScoreToPass($value)
 * @property int|null    $lms_id
 * @method static Builder|Program whereLmsId($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int|null    $school_id
 * @method static Builder|GradeScale1 whereExternalId($value)
 * @method static Builder|GradeScale1 whereSchoolId($value)
 * @method static Builder|GradeScale1 whereUuid($value)
 */
class GradeScaleSQL extends Model implements GradeScale
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'description', 'is_calculate_gpa', 'score_to_pass', 'lms_id', CodeConstant::UUID];

    public function grade_letters(): HasMany
    {
        return $this->hasMany(GradeLetter::class);
    }

    public function classes(): HasMany
    {
        return $this->hasMany(ClassSql::class);
    }
}
