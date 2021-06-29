<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Score
 *
 * @property int         $id
 * @property string      $score
 * @property int|null    $class_id
 * @property int|null    $user_id
 * @property int|null    $grade_letter_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Score newModelQuery()
 * @method static Builder|Score newQuery()
 * @method static Builder|Score query()
 * @method static Builder|Score whereClassId($value)
 * @method static Builder|Score whereCreatedAt($value)
 * @method static Builder|Score whereCreatedBy($value)
 * @method static Builder|Score whereDeletedAt($value)
 * @method static Builder|Score whereGradeLetterId($value)
 * @method static Builder|Score whereId($value)
 * @method static Builder|Score whereScore($value)
 * @method static Builder|Score whereUpdatedAt($value)
 * @method static Builder|Score whereUserId($value)
 * @mixin Eloquent
 * @method static \Database\Factories\ScoreFactory factory(...$parameters)
 */
class Score extends Model
{
    use HasFactory;

    protected $table = 'scores';

    protected $fillable = ['score', 'class_id', 'user_id', 'grade_letter_id'];

    protected $connection = DbConnectionConstant::SQL;
}
