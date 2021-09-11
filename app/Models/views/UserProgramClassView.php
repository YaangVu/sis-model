<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * YaangVu\SisModel\App\Models\views\UserProgramClassView
 *
 * @property-read int|null    $id
 * @property-read string|null $uuid
 * @property-read string|null $external_id
 * @property-read string|null $name
 * @property-read string|null $start_date
 * @property-read string|null $end_date
 * @property-read string|null $status
 * @property-read float|null  $credit
 * @property-read string|null $description
 * @property-read string|null $zone
 * @property-read int|null    $subject_id
 * @property-read int|null    $term_id
 * @property-read int|null    $course_id
 * @property-read int|null    $school_id
 * @property-read int|null    $lms_id
 * @property-read Carbon|null $created_at
 * @property-read Carbon|null $updated_at
 * @property-read string|null $course_name
 * @property-read string|null $subject_name
 * @property-read int|null    $graduation_category_id
 * @property-read string|null $graduation_category_name
 * @property-read int|null    $program_id
 * @property-read string|null $program_name
 * @property-read int|null    $user_id
 * @property-read string|null $user_username
 * @property-read string|null $user_uuid
 * @method static Builder|UserProgramClassView newModelQuery()
 * @method static Builder|UserProgramClassView newQuery()
 * @method static Builder|UserProgramClassView query()
 * @method static Builder|UserProgramClassView whereCourseId($value)
 * @method static Builder|UserProgramClassView whereCourseName($value)
 * @method static Builder|UserProgramClassView whereCreatedAt($value)
 * @method static Builder|UserProgramClassView whereCredit($value)
 * @method static Builder|UserProgramClassView whereDescription($value)
 * @method static Builder|UserProgramClassView whereEndDate($value)
 * @method static Builder|UserProgramClassView whereExternalId($value)
 * @method static Builder|UserProgramClassView whereGraduationCategoryId($value)
 * @method static Builder|UserProgramClassView whereGraduationCategoryName($value)
 * @method static Builder|UserProgramClassView whereId($value)
 * @method static Builder|UserProgramClassView whereLmsId($value)
 * @method static Builder|UserProgramClassView whereName($value)
 * @method static Builder|UserProgramClassView whereProgramId($value)
 * @method static Builder|UserProgramClassView whereProgramName($value)
 * @method static Builder|UserProgramClassView whereSchoolId($value)
 * @method static Builder|UserProgramClassView whereStartDate($value)
 * @method static Builder|UserProgramClassView whereStatus($value)
 * @method static Builder|UserProgramClassView whereSubjectId($value)
 * @method static Builder|UserProgramClassView whereSubjectName($value)
 * @method static Builder|UserProgramClassView whereTermId($value)
 * @method static Builder|UserProgramClassView whereUpdatedAt($value)
 * @method static Builder|UserProgramClassView whereUserId($value)
 * @method static Builder|UserProgramClassView whereUserUsername($value)
 * @method static Builder|UserProgramClassView whereUserUuid($value)
 * @method static Builder|UserProgramClassView whereUuid($value)
 * @method static Builder|UserProgramClassView whereZone($value)
 * @mixin Eloquent
 */
class UserProgramClassView extends Model
{
    protected $table = 'user_program_class_view';
}
