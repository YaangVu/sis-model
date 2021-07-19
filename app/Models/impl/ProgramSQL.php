<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\GraduationCategory;
use YaangVu\SisModel\App\Models\Program;
use YaangVu\SisModel\App\Models\ProgramGraduationCategory;

/**
 * YaangVu\SisModel\App\Models\ProgramSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property int|null    $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Program newModelQuery()
 * @method static Builder|Program newQuery()
 * @method static Builder|Program query()
 * @method static Builder|Program whereCreatedAt($value)
 * @method static Builder|Program whereCreatedBy($value)
 * @method static Builder|Program whereDeletedAt($value)
 * @method static Builder|Program whereDescription($value)
 * @method static Builder|Program whereId($value)
 * @method static Builder|Program whereName($value)
 * @method static Builder|Program whereSchoolId($value)
 * @method static Builder|Program whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|Program onlyTrashed()
 * @method static Builder|Program withTrashed()
 * @method static Builder|Program withoutTrashed()
 * @property string|null $external_id
 * @method static Builder|Program whereExternalId($value)
 * @property string|null $status
 * @method static Builder|Program whereStatus($value)
 * @property int|null    $lms_id
 * @method static Builder|Program whereLmsId($value)
 * @property string|null $uuid
 * @method static Builder|Program whereUuid($value)
 */
class ProgramSQL extends Program
{
    public function graduationCategories(): BelongsToMany
    {
        return $this->belongsToMany(GraduationCategory::class, (new ProgramGraduationCategory())->getTable())
                    ->addSelect('graduation_categories.*', 'program_graduation_category.credit');
    }
}
