<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\ProgramGraduationCategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\ProgramGraduationCategory
 *
 * @property int         $id
 * @property int|null    $program_id
 * @property int|null    $graduation_category_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ProgramGraduationCategory newModelQuery()
 * @method static Builder|ProgramGraduationCategory newQuery()
 * @method static Builder|ProgramGraduationCategory query()
 * @method static Builder|ProgramGraduationCategory whereCreatedAt($value)
 * @method static Builder|ProgramGraduationCategory whereCreatedBy($value)
 * @method static Builder|ProgramGraduationCategory whereDeletedAt($value)
 * @method static Builder|ProgramGraduationCategory whereGraduationCategoryId($value)
 * @method static Builder|ProgramGraduationCategory whereId($value)
 * @method static Builder|ProgramGraduationCategory whereProgramId($value)
 * @method static Builder|ProgramGraduationCategory whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static ProgramGraduationCategoryFactory factory(...$parameters)
 * @method static Builder|ProgramGraduationCategory onlyTrashed()
 * @method static Builder|ProgramGraduationCategory withTrashed()
 * @method static Builder|ProgramGraduationCategory withoutTrashed()
 * @property float|null  $credit
 * @method static Builder|ProgramGraduationCategory whereCredit($value)
 */
class ProgramGraduationCategory extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'program_graduation_category';

    protected $fillable = ['program_id', 'graduation_category_id'];

    protected $connection = DbConnectionConstant::SQL;
}
