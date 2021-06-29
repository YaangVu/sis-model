<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\GradeScaleFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\GradeScale
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
 * @method static GradeScaleFactory factory(...$parameters)
 * @method static Builder|GradeScale onlyTrashed()
 * @method static Builder|GradeScale withTrashed()
 * @method static Builder|GradeScale withoutTrashed()
 * @property boolean     $is_calculate_gpa
 * @method static Builder|Program whereIsCalculateGpa($value)
 */
class GradeScale extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'description', 'is_calculate_gpa'];
}
