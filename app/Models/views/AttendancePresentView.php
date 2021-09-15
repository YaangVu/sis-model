<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * YaangVu\SisModel\App\Models\views\AttendancePresentView
 *
 * @property-read int|null    $id
 * @property-read int|null    $class_id
 * @property-read string|null $calendar_id
 * @property-read string|null $user_uuid
 * @property-read int|null    $user_id
 * @property-read string|null $description
 * @property-read string|null $status
 * @property-read string|null $group
 * @property-read int|null    $term_id
 * @property-read string|null $term_name
 * @property-read string|null $class_name
 * @property-read string|null $subject_name
 * @property-read string|null $program_name
 * @property-read string|null $start
 * @property-read string|null $end
 * @property-read int|null    $program_id
 * @method static Builder|AttendancePresentView newModelQuery()
 * @method static Builder|AttendancePresentView newQuery()
 * @method static Builder|AttendancePresentView query()
 * @method static Builder|AttendancePresentView whereCalendarId($value)
 * @method static Builder|AttendancePresentView whereClassId($value)
 * @method static Builder|AttendancePresentView whereClassName($value)
 * @method static Builder|AttendancePresentView whereDescription($value)
 * @method static Builder|AttendancePresentView whereEnd($value)
 * @method static Builder|AttendancePresentView whereGroup($value)
 * @method static Builder|AttendancePresentView whereId($value)
 * @method static Builder|AttendancePresentView whereProgramName($value)
 * @method static Builder|AttendancePresentView whereStart($value)
 * @method static Builder|AttendancePresentView whereStatus($value)
 * @method static Builder|AttendancePresentView whereSubjectName($value)
 * @method static Builder|AttendancePresentView whereTermId($value)
 * @method static Builder|AttendancePresentView whereTermName($value)
 * @method static Builder|AttendancePresentView whereUserId($value)
 * @method static Builder|AttendancePresentView whereUserUuid($value)
 * @method static Builder|AttendancePresentView whereProgramId($value)
 * @mixin Eloquent
 */
class AttendancePresentView extends Model
{
    protected $table = 'attendance_present_view';
}
