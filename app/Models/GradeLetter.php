<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\GradeLetterFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\GradeLetter
 *
 * @property int         $id
 * @property string      $letter
 * @property float|null  $score
 * @property float|null  $gpa
 * @property int|null    $grade_scale_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GradeLetter newModelQuery()
 * @method static Builder|GradeLetter newQuery()
 * @method static Builder|GradeLetter query()
 * @method static Builder|GradeLetter whereCreatedAt($value)
 * @method static Builder|GradeLetter whereCreatedBy($value)
 * @method static Builder|GradeLetter whereDeletedAt($value)
 * @method static Builder|GradeLetter whereGpa($value)
 * @method static Builder|GradeLetter whereGradeScaleId($value)
 * @method static Builder|GradeLetter whereId($value)
 * @method static Builder|GradeLetter whereLetter($value)
 * @method static Builder|GradeLetter whereScore($value)
 * @method static Builder|GradeLetter whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static GradeLetterFactory factory(...$parameters)
 * @method static Builder|GradeLetter onlyTrashed()
 * @method static Builder|GradeLetter withTrashed()
 * @method static Builder|GradeLetter withoutTrashed()
 * @property string|null $description
 * @method static Builder|GradeLetter whereDescription($value)
 */
class GradeLetter extends Model
{
    use HasFactory;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['letter', 'score', 'gpa', 'grade_scale_id'];
}
