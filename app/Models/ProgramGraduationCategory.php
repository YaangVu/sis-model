<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * YaangVu\SisModel\App\Models\ProgramGraduationCategory
 *
 * @property int $id
 * @property int|null $program_id
 * @property int|null $graduation_category_id
 * @property float|null $credit
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ProgramGraduationCategory newModelQuery()
 * @method static Builder|ProgramGraduationCategory newQuery()
 * @method static Builder|ProgramGraduationCategory query()
 * @method static Builder|ProgramGraduationCategory whereCreatedAt($value)
 * @method static Builder|ProgramGraduationCategory whereCreatedBy($value)
 * @method static Builder|ProgramGraduationCategory whereCredit($value)
 * @method static Builder|ProgramGraduationCategory whereDeletedAt($value)
 * @method static Builder|ProgramGraduationCategory whereGraduationCategoryId($value)
 * @method static Builder|ProgramGraduationCategory whereId($value)
 * @method static Builder|ProgramGraduationCategory whereProgramId($value)
 * @method static Builder|ProgramGraduationCategory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ProgramGraduationCategory extends Model
{
    //
}
