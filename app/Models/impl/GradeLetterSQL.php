<?php


namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\GradeLetterFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\GradeLetter;

/**
 * YaangVu\SisModel\App\Models\GradeLetterSQL
 *
 * @property int         $id
 * @property string      $letter
 * @property float|null  $score
 * @property float|null  $gpaSQL
 * @property int|null    $grade_scale_id
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
 * @method static Builder|GradeLetterSQL whereGpa($value)
 * @method static Builder|GradeLetterSQL whereGradeScaleId($value)
 * @method static Builder|GradeLetterSQL whereId($value)
 * @method static Builder|GradeLetterSQL whereLetter($value)
 * @method static Builder|GradeLetterSQL whereScore($value)
 * @method static Builder|GradeLetterSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static GradeLetterFactory factory(...$parameters)
 * @method static Builder|GradeLetterSQL onlyTrashed()
 * @method static Builder|GradeLetterSQL withTrashed()
 * @method static Builder|GradeLetterSQL withoutTrashed()
 * @property string|null $description
 * @method static Builder|GradeLetter whereDescription($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|GradeLetterSQL whereExternalId($value)
 * @method static Builder|GradeLetterSQL whereUuid($value)
 * @property float|null  $gpa
 */
class GradeLetterSQL extends Model implements GradeLetter
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['letter', 'score', 'gpaSQL', 'grade_scale_id'];
}
