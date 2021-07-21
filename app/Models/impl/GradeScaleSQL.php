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
 * @method static Builder|GradeScaleSQL newModelQuery()
 * @method static Builder|GradeScaleSQL newQuery()
 * @method static Builder|GradeScaleSQL query()
 * @method static Builder|GradeScaleSQL whereCreatedAt($value)
 * @method static Builder|GradeScaleSQL whereCreatedBy($value)
 * @method static Builder|GradeScaleSQL whereDeletedAt($value)
 * @method static Builder|GradeScaleSQL whereDescription($value)
 * @method static Builder|GradeScaleSQL whereId($value)
 * @method static Builder|GradeScaleSQL whereName($value)
 * @method static Builder|GradeScaleSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|GradeScaleSQL onlyTrashed()
 * @method static Builder|GradeScaleSQL withTrashed()
 * @method static Builder|GradeScaleSQL withoutTrashed()
 * @property boolean     $is_calculate_gpa
 * @method static Builder|ProgramSQL whereIsCalculateGpa($value)
 * @property float       $score_to_pass
 * @method static Builder|ProgramSQL whereScoreToPass($value)
 * @property int|null    $lms_id
 * @method static Builder|ProgramSQL whereLmsId($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int|null    $school_id
 * @method static Builder|GradeScaleSQL whereExternalId($value)
 * @method static Builder|GradeScaleSQL whereSchoolId($value)
 * @method static Builder|GradeScaleSQL whereUuid($value)
 */
class GradeScaleSQL extends Model implements GradeScale
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'description', 'is_calculate_gpa', 'score_to_pass', 'lms_id', CodeConstant::UUID];

    public function gradeLetters(): HasMany
    {
        return $this->hasMany(GradeLetterSQL::class);
    }

    public function classes(): HasMany
    {
        return $this->hasMany(ClassSQL::class);
    }
}
