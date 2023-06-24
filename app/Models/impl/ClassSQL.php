<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Relations\BelongsTo as MBelongsTo;
use YaangVu\Constant\ClassAssignmentConstant;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Constants\CalendarRepeatTypeConstant;
use YaangVu\SisModel\App\Models\Clazz;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SQLModel;


/**
 * YaangVu\SisModel\App\Models\impl\ClassSQL
 *
 * @property int                                                                          $id
 * @property string|null                                                                  $uuid class id
 * @property string|null                                                                  $external_id
 * @property string                                                                       $name
 * @property string|null                                                                  $start_date
 * @property string|null                                                                  $end_date
 * @property string|null                                                                  $status
 * @property float|null                                                                   $credit
 * @property string|null                                                                  $description
 * @property string|null                                                                  $zone
 * @property int|null                                                                     $subject_id
 * @property int|null                                                                     $term_id
 * @property int|null                                   $course_id
 * @property int|null                                   $school_id
 * @property int|null                                   $lms_id
 * @property int|null                                   $created_by
 * @property Carbon|null                                $created_at
 * @property Carbon|null                                $updated_at
 * @property Carbon|null                                $deleted_at
 * @property bool|null                                  $is_transfer_school
 * @property string|null                                $transfer_school_information
 * @property string|null                                $transfer_school_note
 * @property-read Collection|AttendanceSQL[]            $attendances
 * @property-read int|null                              $attendances_count
 * @property-read Collection|ClassActivityCategorySQL[] $classActivityCategories
 * @property-read int|null
 *                $class_activity_categories_count
 * @property-read ClassNoSQL|null                       $classNoSql
 * @property-read CourseSQL|null                        $course
 * @property-read GraduationCategorySQL|null            $graduationCategories
 * @property-read LmsSQL|null                           $lms
 * @property-read Collection|ClassAssignmentSQL[]       $students
 * @property-read int|null                              $students_count
 * @property-read SubjectSQL|null                                              $subject
 * @property-read Collection|ClassAssignmentSQL[]                              $teacherOfClassAssignment
 * @property-read int|null
 *                $teacher_of_class_assignment_count
 * @property-read Collection|ClassAssignmentSQL[]                                         $teachers
 * @property-read int|null                                                                $teachers_count
 * @property-read TermSQL|null                                                            $terms
 * @property-read UserSQL|null                                                            $user
 * @method static Builder|ClassSQL newModelQuery()
 * @method static Builder|ClassSQL newQuery()
 * @method static \Illuminate\Database\Query\Builder|ClassSQL onlyTrashed()
 * @method static Builder|ClassSQL query()
 * @method static Builder|ClassSQL whereCourseId($value)
 * @method static Builder|ClassSQL whereCreatedAt($value)
 * @method static Builder|ClassSQL whereCreatedBy($value)
 * @method static Builder|ClassSQL whereCredit($value)
 * @method static Builder|ClassSQL whereDeletedAt($value)
 * @method static Builder|ClassSQL whereDescription($value)
 * @method static Builder|ClassSQL whereEndDate($value)
 * @method static Builder|ClassSQL whereExternalId($value)
 * @method static Builder|ClassSQL whereId($value)
 * @method static Builder|ClassSQL whereIsTransferSchool($value)
 * @method static Builder|ClassSQL whereLmsId($value)
 * @method static Builder|ClassSQL whereName($value)
 * @method static Builder|ClassSQL whereSchoolId($value)
 * @method static Builder|ClassSQL whereStartDate($value)
 * @method static Builder|ClassSQL whereStatus($value)
 * @method static Builder|ClassSQL whereSubjectId($value)
 * @method static Builder|ClassSQL whereTermId($value)
 * @method static Builder|ClassSQL whereTransferSchoolInformation($value)
 * @method static Builder|ClassSQL whereTransferSchoolNote($value)
 * @method static Builder|ClassSQL whereUpdatedAt($value)
 * @method static Builder|ClassSQL whereUuid($value)
 * @method static Builder|ClassSQL whereZone($value)
 * @method static \Illuminate\Database\Query\Builder|ClassSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ClassSQL withoutTrashed()
 * @mixin Eloquent
 */
class ClassSQL extends Model implements Clazz
{
    use HasFactory, SoftDeletes;

    protected $table = self::table;

    protected $fillable
        = ['name', 'start_date', 'end_date', 'status',
           CodeConstant::EX_ID, 'lms_id', 'credit',
           'term_id',
           'course_id', 'description', CodeConstant::UUID,
           'zone', 'lms_id', 'school_id', 'subject_id',
           'is_transfer_school', 'transfer_school_information',
           'transfer_school_note'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;

    public function terms(): BelongsTo
    {
        return $this->belongsTo(TermSQL::class, 'term_id')
                    ->whereNull('deleted_at');
    }

    public function graduationCategories(): BelongsTo
    {
        return $this->belongsTo(GraduationCategorySQL::class, 'graduation_category_id')
                    ->whereNull('graduation_categories.deleted_at');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(CourseSQL::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(ClassAssignmentSQL::class, 'class_id')
                    ->from('class_assignments as class_assignments')
                    ->select('class_assignments.id', 'user_id', 'assignment', 'class_id', 'position',
                             'class_assignments.created_by')
                    ->join('users', 'users.id', '=', 'class_assignments.user_id')
                    ->whereNull('users.deleted_at')
                    ->where('assignment', '=', ClassAssignmentConstant::STUDENT)
                    ->whereNull('class_assignments.deleted_at');
    }

    public function teachers(): HasMany
    {
        return $this->hasMany(ClassAssignmentSQL::class, 'class_id')
                    ->select('id', 'user_id', 'assignment', 'class_id', 'position', 'created_by')
                    ->whereIn('assignment',
                              [ClassAssignmentConstant::PRIMARY_TEACHER, ClassAssignmentConstant::SECONDARY_TEACHER])
                    ->whereNull('deleted_at');
    }

    public function teacherOfClassAssignment(): HasMany
    {
        return $this->hasMany(ClassAssignmentSQL::class, 'class_id')
                    ->join(UserSQL::table, 'users.id', '=', 'class_assignments.user_id')
                    ->whereIn('assignment',
                              [ClassAssignmentConstant::PRIMARY_TEACHER, ClassAssignmentConstant::SECONDARY_TEACHER])
                    ->whereNull('class_assignments.deleted_at');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(SubjectSQL::class, 'subject_id');
    }

    function attendances(): HasMany
    {
        return $this->hasMany(AttendanceSQL::class, 'class_id');
    }

    public function classNoSql(): BelongsTo|MBelongsTo
    {
        return $this->belongsTo(ClassNoSQL::class, CodeConstant::UUID, CodeConstant::UUID);
    }

    public function lms(): HasOne
    {
        return $this->hasOne(LmsSQL::class, 'id', 'lms_id');
    }

    public function user(): BelongsTo
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function calendarsRepeatWeeklyAndDaily(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'class_id', 'id')
                                 ->where('repeat', CalendarRepeatTypeConstant::DAILY)
                                 ->orWhere('repeat', CalendarRepeatTypeConstant::WEEKLY);
    }

    public function calendarsRepeatIrregularly(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'class_id', 'id')
                                 ->where('repeat', CalendarRepeatTypeConstant::IRREGULARLY)
                                 ->orderBy('start', 'ASC');
    }

    public function classActivityCategories(): HasMany
    {
        return $this->hasMany(ClassActivityCategorySQL::class, 'class_id');
    }
}
