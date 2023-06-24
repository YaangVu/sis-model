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
use YaangVu\SisModel\App\Models\GradeScale;

/**
 * YaangVu\SisModel\App\Models\impl\GradeScaleSQL
 *
 * @property int                                                                $id
 * @property string|null                                                        $uuid
 * @property string|null                                                        $external_id
 * @property string                                                             $name
 * @property string|null                                                        $description
 * @property float|null                                                         $score_to_pass
 * @property bool                             $is_calculate_gpa
 * @property int|null                         $school_id
 * @property int|null                         $created_by
 * @property Carbon|null                      $created_at
 * @property Carbon|null                      $updated_at
 * @property Carbon|null                      $deleted_at
 * @property float|null                       $extra_point_honor    Extra points for
 *           honor class
 * @property float|null                       $extra_point_advanced Extra points for
 *           advanced class
 * @property-read Collection|GradeLetterSQL[] $gradeLetters
 * @property-read int|null                    $grade_letters_count
 * @property-read Collection|SubjectSQL[]     $subjects
 * @property-read int|null                    $subjects_count
 * @method static Builder|GradeScaleSQL newModelQuery()
 * @method static Builder|GradeScaleSQL newQuery()
 * @method static \Illuminate\Database\Query\Builder|GradeScaleSQL onlyTrashed()
 * @method static Builder|GradeScaleSQL query()
 * @method static Builder|GradeScaleSQL whereCreatedAt($value)
 * @method static Builder|GradeScaleSQL whereCreatedBy($value)
 * @method static Builder|GradeScaleSQL whereDeletedAt($value)
 * @method static Builder|GradeScaleSQL whereDescription($value)
 * @method static Builder|GradeScaleSQL whereExternalId($value)
 * @method static Builder|GradeScaleSQL whereExtraPointAdvanced($value)
 * @method static Builder|GradeScaleSQL whereExtraPointHonor($value)
 * @method static Builder|GradeScaleSQL whereId($value)
 * @method static Builder|GradeScaleSQL whereIsCalculateGpa($value)
 * @method static Builder|GradeScaleSQL whereName($value)
 * @method static Builder|GradeScaleSQL whereSchoolId($value)
 * @method static Builder|GradeScaleSQL whereScoreToPass($value)
 * @method static Builder|GradeScaleSQL whereUpdatedAt($value)
 * @method static Builder|GradeScaleSQL whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|GradeScaleSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|GradeScaleSQL withoutTrashed()
 * @mixin Eloquent
 */
class GradeScaleSQL extends Model implements GradeScale
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = ['name', 'description', 'is_calculate_gpa',
           'score_to_pass', 'lms_id', CodeConstant::UUID,
           'extra_point_honor', 'extra_point_advanced'];

    public function gradeLetters(): HasMany
    {
        return $this->hasMany(GradeLetterSQL::class, 'grade_scale_id');
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(SubjectSQL::class, 'grade_scale_id');
    }
}
