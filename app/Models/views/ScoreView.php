<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * YaangVu\SisModel\App\Models\views\ScoreView
 *
 * @property-read int|null    $score_id
 * @property-read int|null    $user_id
 * @property-read string|null $user_uuid
 * @property-read string|null $username
 * @property-read string|null $score
 * @property-read int|null    $class_id
 * @property-read int|null    $grade_letter_id
 * @property-read int|null    $lms_id
 * @property-read int|null    $school_id
 * @property-read bool|null   $is_pass
 * @property-read string|null $grade_letter
 * @property-read float|null  $current_score
 * @property-read string|null $real_weight
 * @property-read int|null    $term_id
 * @property-read string|null $term_name
 * @property-read string|null $class_name
 * @property-read string|null $status
 * @property-read string|null $subject_name
 * @property-read int|null    $subject_id
 * @property-read string|null $weight
 * @property-read string|null $credit
 * @property-read string|null $subject_type
 * @property-read int|null    $grade_id
 * @property-read string|null $program_name
 * @property-read int|null    $program_id
 * @property-read bool|null   $is_calculate_gpa
 * @property-read float|null  $extra_point_honor
 * @property-read float|null  $extra_point_advanced
 * @property-read int|null    $grade_scale_id
 * @property-read float|null  $gpa
 * @method static Builder|ScoreView newModelQuery()
 * @method static Builder|ScoreView newQuery()
 * @method static Builder|ScoreView query()
 * @method static Builder|ScoreView whereClassId($value)
 * @method static Builder|ScoreView whereClassName($value)
 * @method static Builder|ScoreView whereCredit($value)
 * @method static Builder|ScoreView whereCurrentScore($value)
 * @method static Builder|ScoreView whereExtraPointAdvanced($value)
 * @method static Builder|ScoreView whereExtraPointHonor($value)
 * @method static Builder|ScoreView whereGpa($value)
 * @method static Builder|ScoreView whereGradeId($value)
 * @method static Builder|ScoreView whereGradeLetter($value)
 * @method static Builder|ScoreView whereGradeLetterId($value)
 * @method static Builder|ScoreView whereGradeScaleId($value)
 * @method static Builder|ScoreView whereIsCalculateGpa($value)
 * @method static Builder|ScoreView whereIsPass($value)
 * @method static Builder|ScoreView whereLmsId($value)
 * @method static Builder|ScoreView whereProgramId($value)
 * @method static Builder|ScoreView whereProgramName($value)
 * @method static Builder|ScoreView whereRealWeight($value)
 * @method static Builder|ScoreView whereSchoolId($value)
 * @method static Builder|ScoreView whereScore($value)
 * @method static Builder|ScoreView whereScoreId($value)
 * @method static Builder|ScoreView whereStatus($value)
 * @method static Builder|ScoreView whereSubjectId($value)
 * @method static Builder|ScoreView whereSubjectName($value)
 * @method static Builder|ScoreView whereSubjectType($value)
 * @method static Builder|ScoreView whereTermId($value)
 * @method static Builder|ScoreView whereTermName($value)
 * @method static Builder|ScoreView whereUserId($value)
 * @method static Builder|ScoreView whereUserUuid($value)
 * @method static Builder|ScoreView whereUsername($value)
 * @method static Builder|ScoreView whereWeight($value)
 * @mixin Eloquent
 * @property string|null      $start_date
 * @method static Builder|ScoreView whereStartDate($value)
 * @property string|null      $term_start_date
 * @property string|null      $term_end_date
 * @method static Builder|ScoreView whereTermEndDate($value)
 * @method static Builder|ScoreView whereTermStartDate($value)
 * @property string|null      $raw_grade_point
 * @method static Builder|ScoreView whereRawGradePoint($value)
 * @property string|null      $final_grade_point
 * @method static Builder|ScoreView whereFinalGradePoint($value)
 * @property string|null      $extra_point
 * @method static Builder|ScoreView whereExtraPoint($value)
 * @property string|null $graduation_category_id
 * @method static Builder|ScoreView whereGraduationCategoryId($value)
 */
class ScoreView extends Model
{
    protected $table = 'score_view';
}
