<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\GraduationCategory;
use YaangVu\SisModel\App\Models\Program;
use YaangVu\SisModel\App\Models\ProgramGraduationCategory;

/**
 * YaangVu\SisModel\App\Models\ProgramGraduationCategorySQL
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
 * @method static Builder|ProgramGraduationCategory onlyTrashed()
 * @method static Builder|ProgramGraduationCategory withTrashed()
 * @method static Builder|ProgramGraduationCategory withoutTrashed()
 * @property float|null  $credit
 * @method static Builder|ProgramGraduationCategory whereCredit($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|ProgramGraduationCategory whereExternalId($value)
 * @method static Builder|ProgramGraduationCategory whereUuid($value)
 */
class ProgramGraduationCategorySQL extends ProgramGraduationCategory
{
    public function graduationCategories(): BelongsToMany
    {
        return $this->belongsToMany(GraduationCategory::class, 'graduation_category_id')
                    ->whereNull('deleted_at');
    }

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class, 'id', 'program_id')
                    ->select('id', 'name', 'description', 'school_id')
                    ->whereNull('deleted_at');
    }
}
