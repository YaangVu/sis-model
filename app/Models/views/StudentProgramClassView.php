<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\impl\SubjectSQL;

/**
 * YaangVu\SisModel\App\Models\views\StudentProgramClassView
 *
 * @property int|null             $id
 * @property string|null          $uuid
 * @property string|null          $external_id
 * @property string|null          $name
 * @property string|null          $start_date
 * @property string|null          $end_date
 * @property string|null          $status
 * @property float|null           $credit
 * @property string|null          $description
 * @property string|null          $zone
 * @property int|null             $subject_id
 * @property int|null             $term_id
 * @property int|null             $course_id
 * @property int|null             $school_id
 * @property int|null             $lms_id
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property string|null          $course_name
 * @property string|null          $subject_name
 * @property int|null             $graduation_category_id
 * @property string|null          $graduation_category_name
 * @property int|null             $program_id
 * @property string|null          $program_name
 * @property int|null             $student_id
 * @property string|null          $student_username
 * @property string|null          $student_uuid
 * @method static Builder|StudentProgramClassView newModelQuery()
 * @method static Builder|StudentProgramClassView newQuery()
 * @method static Builder|StudentProgramClassView query()
 * @method static Builder|StudentProgramClassView whereCourseId($value)
 * @method static Builder|StudentProgramClassView whereCourseName($value)
 * @method static Builder|StudentProgramClassView whereCreatedAt($value)
 * @method static Builder|StudentProgramClassView whereCredit($value)
 * @method static Builder|StudentProgramClassView whereDescription($value)
 * @method static Builder|StudentProgramClassView whereEndDate($value)
 * @method static Builder|StudentProgramClassView whereExternalId($value)
 * @method static Builder|StudentProgramClassView whereGraduationCategoryId($value)
 * @method static Builder|StudentProgramClassView whereGraduationCategoryName($value)
 * @method static Builder|StudentProgramClassView whereId($value)
 * @method static Builder|StudentProgramClassView whereLmsId($value)
 * @method static Builder|StudentProgramClassView whereName($value)
 * @method static Builder|StudentProgramClassView whereProgramId($value)
 * @method static Builder|StudentProgramClassView whereProgramName($value)
 * @method static Builder|StudentProgramClassView whereSchoolId($value)
 * @method static Builder|StudentProgramClassView whereStartDate($value)
 * @method static Builder|StudentProgramClassView whereStatus($value)
 * @method static Builder|StudentProgramClassView whereStudentId($value)
 * @method static Builder|StudentProgramClassView whereStudentUsername($value)
 * @method static Builder|StudentProgramClassView whereStudentUuid($value)
 * @method static Builder|StudentProgramClassView whereSubjectId($value)
 * @method static Builder|StudentProgramClassView whereSubjectName($value)
 * @method static Builder|StudentProgramClassView whereTermId($value)
 * @method static Builder|StudentProgramClassView whereUpdatedAt($value)
 * @method static Builder|StudentProgramClassView whereUuid($value)
 * @method static Builder|StudentProgramClassView whereZone($value)
 * @mixin Eloquent
 * @property int|null             $class_id
 * @property-read SubjectSQL|null $subject
 * @method static Builder|StudentProgramClassView whereClassId($value)
 */
class StudentProgramClassView extends Model
{
    protected $table = 'student_program_class_view';

    public function subject(): BelongsTo
    {
        return $this->belongsTo(SubjectSQL::class);
    }
}
