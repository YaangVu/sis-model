<?php


namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\GradeLetter;

/**
 * YaangVu\SisModel\App\Models\impl\GradeLetterSQL
 *
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property string      $letter
 * @property float|null  $score
 * @property float|null  $gpa
 * @property int|null    $grade_scale_id
 * @property string|null $description
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GradeLetterSQL newModelQuery()
 * @method static Builder|GradeLetterSQL newQuery()
 * @method static Builder|GradeLetterSQL query()
 * @method static Builder|GradeLetterSQL whereCreatedAt($value)
 * @method static Builder|GradeLetterSQL whereCreatedBy($value)
 * @method static Builder|GradeLetterSQL whereDeletedAt($value)
 * @method static Builder|GradeLetterSQL whereDescription($value)
 * @method static Builder|GradeLetterSQL whereExternalId($value)
 * @method static Builder|GradeLetterSQL whereGpa($value)
 * @method static Builder|GradeLetterSQL whereGradeScaleId($value)
 * @method static Builder|GradeLetterSQL whereId($value)
 * @method static Builder|GradeLetterSQL whereLetter($value)
 * @method static Builder|GradeLetterSQL whereScore($value)
 * @method static Builder|GradeLetterSQL whereUpdatedAt($value)
 * @method static Builder|GradeLetterSQL whereUuid($value)
 * @mixin Eloquent
 */
class GradeLetterSQL extends Model implements GradeLetter
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['letter', 'score', 'gpa', 'grade_scale_id'];
}
