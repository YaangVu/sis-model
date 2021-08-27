<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Score;
use YaangVu\SisModel\Database\Factories\ScoreFactory;

/**
 * YaangVu\SisModel\App\Models\ScoreSQL
 *
 * @property int          $id
 * @property string       $score
 * @property int|null     $class_id
 * @property int|null     $user_id
 * @property int|null     $grade_letter_id
 * @property int|null     $created_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property string|null  $deleted_at
 * @method static Builder|ScoreSQL newModelQuery()
 * @method static Builder|ScoreSQL newQuery()
 * @method static Builder|ScoreSQL query()
 * @method static Builder|ScoreSQL whereClassId($value)
 * @method static Builder|ScoreSQL whereCreatedAt($value)
 * @method static Builder|ScoreSQL whereCreatedBy($value)
 * @method static Builder|ScoreSQL whereDeletedAt($value)
 * @method static Builder|ScoreSQL whereGradeLetterId($value)
 * @method static Builder|ScoreSQL whereId($value)
 * @method static Builder|ScoreSQL whereScore($value)
 * @method static Builder|ScoreSQL whereUpdatedAt($value)
 * @method static Builder|ScoreSQL whereUserId($value)
 * @property int|null     $lms_id
 * @method static Builder|ProgramSQL whereLmsId($value)
 * @property boolean|null $is_pass
 * @method static Builder|ProgramSQL whereIsPass($value)
 * @mixin Eloquent
 * @method static ScoreFactory factory(...$parameters)
 * @property string|null  $uuid
 * @property string|null  $external_id
 * @property int|null     $school_id
 * @method static Builder|ScoreSQL whereExternalId($value)
 * @method static Builder|ScoreSQL whereSchoolId($value)
 * @method static Builder|ScoreSQL whereUuid($value)
 * @property string|null  $grade_letter
 * @method static Builder|ScoreSQL whereGradeLetter($value)
 * @property float|null   $current_score
 * @method static Builder|ScoreSQL whereCurrentScore($value)
 * @property string|null  $real_weight
 * @method static Builder|ScoreSQL whereRealWeight($value)
 */
class ScoreSQL extends Model implements Score
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable = ['score', 'class_id', 'user_id', 'grade_letter_id', 'grade_letter', 'lms_id', 'school_id', CodeConstant::UUID, 'is_pass', 'real_weight'];

    protected $connection = DbConnectionConstant::SQL;
}
