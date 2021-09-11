<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\impl\SubjectSQL;

/**
 * YaangVu\SisModel\App\Models\views\ClassView
 *
 * @property int|null    $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property string|null $name
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property float|null  $credit
 * @property string|null $description
 * @property string|null $zone
 * @property int|null    $subject_id
 * @property int|null    $term_id
 * @property int|null    $course_id
 * @property int|null    $school_id
 * @property int|null    $lms_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $course_name
 * @property string|null $subject_name
 * @property int|null    $graduation_category_id
 * @property string|null $graduation_category_name
 * @method static Builder|ClassView newModelQuery()
 * @method static Builder|ClassView newQuery()
 * @method static Builder|ClassView query()
 * @method static Builder|ClassView whereCourseId($value)
 * @method static Builder|ClassView whereCourseName($value)
 * @method static Builder|ClassView whereCreatedAt($value)
 * @method static Builder|ClassView whereCredit($value)
 * @method static Builder|ClassView whereDescription($value)
 * @method static Builder|ClassView whereEndDate($value)
 * @method static Builder|ClassView whereExternalId($value)
 * @method static Builder|ClassView whereGraduationCategoryId($value)
 * @method static Builder|ClassView whereGraduationCategoryName($value)
 * @method static Builder|ClassView whereId($value)
 * @method static Builder|ClassView whereLmsId($value)
 * @method static Builder|ClassView whereName($value)
 * @method static Builder|ClassView whereSchoolId($value)
 * @method static Builder|ClassView whereStartDate($value)
 * @method static Builder|ClassView whereStatus($value)
 * @method static Builder|ClassView whereSubjectId($value)
 * @method static Builder|ClassView whereSubjectName($value)
 * @method static Builder|ClassView whereTermId($value)
 * @method static Builder|ClassView whereUpdatedAt($value)
 * @method static Builder|ClassView whereUuid($value)
 * @method static Builder|ClassView whereZone($value)
 * @mixin Eloquent
 */
class ClassView extends Model
{
    protected $table = 'class_view';

    public function subject(): BelongsTo
    {
        return $this->belongsTo(SubjectSQL::class);
    }
}
