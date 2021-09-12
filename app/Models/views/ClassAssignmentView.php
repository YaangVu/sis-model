<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\impl\SubjectSQL;

/**
 * YaangVu\SisModel\App\Models\views\ClassAssignmentView
 *
 * @property int|null             $class_id
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
 * @property int|null             $assignment_user_id
 * @property string|null          $assignment
 * @method static Builder|ClassAssignmentView newModelQuery()
 * @method static Builder|ClassAssignmentView newQuery()
 * @method static Builder|ClassAssignmentView query()
 * @method static Builder|ClassAssignmentView whereAssignment($value)
 * @method static Builder|ClassAssignmentView whereAssignmentUserId($value)
 * @method static Builder|ClassAssignmentView whereClassId($value)
 * @method static Builder|ClassAssignmentView whereCourseId($value)
 * @method static Builder|ClassAssignmentView whereCourseName($value)
 * @method static Builder|ClassAssignmentView whereCreatedAt($value)
 * @method static Builder|ClassAssignmentView whereCredit($value)
 * @method static Builder|ClassAssignmentView whereDescription($value)
 * @method static Builder|ClassAssignmentView whereEndDate($value)
 * @method static Builder|ClassAssignmentView whereExternalId($value)
 * @method static Builder|ClassAssignmentView whereLmsId($value)
 * @method static Builder|ClassAssignmentView whereName($value)
 * @method static Builder|ClassAssignmentView whereSchoolId($value)
 * @method static Builder|ClassAssignmentView whereStartDate($value)
 * @method static Builder|ClassAssignmentView whereStatus($value)
 * @method static Builder|ClassAssignmentView whereSubjectId($value)
 * @method static Builder|ClassAssignmentView whereSubjectName($value)
 * @method static Builder|ClassAssignmentView whereTermId($value)
 * @method static Builder|ClassAssignmentView whereUpdatedAt($value)
 * @method static Builder|ClassAssignmentView whereUuid($value)
 * @method static Builder|ClassAssignmentView whereZone($value)
 * @mixin Eloquent
 * @property-read SubjectSQL|null $subject
 */
class ClassAssignmentView extends Model
{
    protected $table = 'class_assignments_view';

    public function subject(): BelongsTo
    {
        return $this->belongsTo(SubjectSQL::class);
    }
}
