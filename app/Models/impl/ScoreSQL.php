<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Score;

/**
 * YaangVu\SisModel\App\Models\impl\ScoreSQL
 *
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property string      $score
 * @property int|null    $class_id
 * @property int|null    $user_id
 * @property int|null    $grade_letter_id
 * @property int|null    $lms_id
 * @property int|null    $school_id
 * @property bool|null   $is_pass
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $grade_letter
 * @property float|null  $current_score
 * @property string|null $real_weight
 * @property string|null $current_grade_letter
 * @property bool|null   $is_calculate_gpa  Use to calculate GPA, link from grade_scales table
 * @property float|null  $raw_grade_point   Value to calculate GPA
 * @property float|null  $final_grade_point Value after plus extra point to calculate GPA
 * @property float|null  $extra_point       Extra point if subject type is Honor or Advanced
 * @method static Builder|ScoreSQL newModelQuery()
 * @method static Builder|ScoreSQL newQuery()
 * @method static Builder|ScoreSQL query()
 * @method static Builder|ScoreSQL whereClassId($value)
 * @method static Builder|ScoreSQL whereCreatedAt($value)
 * @method static Builder|ScoreSQL whereCreatedBy($value)
 * @method static Builder|ScoreSQL whereCurrentGradeLetter($value)
 * @method static Builder|ScoreSQL whereCurrentScore($value)
 * @method static Builder|ScoreSQL whereDeletedAt($value)
 * @method static Builder|ScoreSQL whereExternalId($value)
 * @method static Builder|ScoreSQL whereExtraPoint($value)
 * @method static Builder|ScoreSQL whereFinalGradePoint($value)
 * @method static Builder|ScoreSQL whereGradeLetter($value)
 * @method static Builder|ScoreSQL whereGradeLetterId($value)
 * @method static Builder|ScoreSQL whereId($value)
 * @method static Builder|ScoreSQL whereIsCalculateGpa($value)
 * @method static Builder|ScoreSQL whereIsPass($value)
 * @method static Builder|ScoreSQL whereLmsId($value)
 * @method static Builder|ScoreSQL whereRawGradePoint($value)
 * @method static Builder|ScoreSQL whereRealWeight($value)
 * @method static Builder|ScoreSQL whereSchoolId($value)
 * @method static Builder|ScoreSQL whereScore($value)
 * @method static Builder|ScoreSQL whereUpdatedAt($value)
 * @method static Builder|ScoreSQL whereUserId($value)
 * @method static Builder|ScoreSQL whereUuid($value)
 * @mixin Eloquent
 */
class ScoreSQL extends Model implements Score
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            'score',
            'current_score',
            'class_id',
            'user_id',
            'grade_letter_id',
            'grade_letter',
            'lms_id',
            'school_id',
            CodeConstant::UUID,
            'is_pass',
            'real_weight',
            'grade',
        ];

    protected $connection = DbConnectionConstant::SQL;
}
