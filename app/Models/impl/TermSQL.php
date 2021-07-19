<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\Clazz;
use YaangVu\SisModel\App\Models\Course;
use YaangVu\SisModel\App\Models\Program;
use YaangVu\SisModel\App\Models\Term;



/**
 * YaangVu\SisModel\App\Models\TermSQL
 *
 * @property int                     $id
 * @property string                  $name
 * @property string|null             $start_date
 * @property string|null             $end_date
 * @property string|null             $status
 * @property int|null                $school_id
 * @property string|null             $external_id
 * @property string|null             $description
 * @property int|null                $created_by
 * @property Carbon|null             $created_at
 * @property Carbon|null             $updated_at
 * @property Carbon|null             $deleted_at
 * @property-read Collection|Clazz[] $classes
 * @property-read int|null           $classes_count
 * @method static Builder|Term newModelQuery()
 * @method static Builder|Term newQuery()
 * @method static Builder|Term onlyTrashed()
 * @method static Builder|Term query()
 * @method static Builder|Term whereCreatedAt($value)
 * @method static Builder|Term whereCreatedBy($value)
 * @method static Builder|Term whereDeletedAt($value)
 * @method static Builder|Term whereEndDate($value)
 * @method static Builder|Term whereExternalId($value)
 * @method static Builder|Term whereDescription($value)
 * @method static Builder|Term whereId($value)
 * @method static Builder|Term whereName($value)
 * @method static Builder|Term whereSchoolId($value)
 * @method static Builder|Term whereStartDate($value)
 * @method static Builder|Term whereStatus($value)
 * @method static Builder|Term whereUpdatedAt($value)
 * @method static Builder|Term withTrashed()
 * @method static Builder|Term withoutTrashed()
 * @mixin Eloquent
 * @property int|null                $lms_id
 * @method static Builder|Program whereLmsId($value)
 * @property string|null             $uuid
 * @method static Builder|Term whereUuid($value)
 */
class TermSQL extends Term
{
    public function classes(): HasMany
    {
        return $this->hasMany(ClassSQL::class, 'term_id');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
