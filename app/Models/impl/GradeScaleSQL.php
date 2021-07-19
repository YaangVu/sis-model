<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\GradeLetter;
use YaangVu\SisModel\App\Models\GradeScale;

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
 * @method static Builder|GradeScale newModelQuery()
 * @method static Builder|GradeScale newQuery()
 * @method static Builder|GradeScale query()
 * @method static Builder|GradeScale whereCreatedAt($value)
 * @method static Builder|GradeScale whereCreatedBy($value)
 * @method static Builder|GradeScale whereDeletedAt($value)
 * @method static Builder|GradeScale whereDescription($value)
 * @method static Builder|GradeScale whereId($value)
 * @method static Builder|GradeScale whereName($value)
 * @method static Builder|GradeScale whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|GradeScale onlyTrashed()
 * @method static Builder|GradeScale withTrashed()
 * @method static Builder|GradeScale withoutTrashed()
 * @property boolean     $is_calculate_gpa
 * @method static Builder|Program whereIsCalculateGpa($value)
 * @property float       $score_to_pass
 * @method static Builder|Program whereScoreToPass($value)
 * @property int|null    $lms_id
 * @method static Builder|Program whereLmsId($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int|null    $school_id
 * @method static Builder|GradeScale whereExternalId($value)
 * @method static Builder|GradeScale whereSchoolId($value)
 * @method static Builder|GradeScale whereUuid($value)
 */
class GradeScaleSQL extends GradeScale
{
    public function grade_letters(): HasMany
    {
        return $this->hasMany(GradeLetter::class);
    }

    public function classes(): HasMany
    {
        return $this->hasMany(ClassSql::class);
    }
}
