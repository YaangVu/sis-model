<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
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
use YaangVu\SisModel\App\Models\Clazz;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Constants\CalendarRepeatTypeConstant;


/**
 * YaangVu\SisModel\App\Models\impl\ClassSQL
 *
 * @property int                                  $id
 * @property string                               $name
 * @property string|null                          $start_date
 * @property string|null                          $end_date
 * @property string|null                          $status
 * @property string|null                          $external_id
 * @property string|null                          $lms_id
 * @property float|null                           $credit
 * @property int|null                             $term_id
 * @property int|null                             $created_by
 * @property Carbon|null                          $created_at
 * @property Carbon|null                          $updated_at
 * @property string|null                          $deleted_at
 * @property string|null                          $description
 * @property int|null                             $course_id
 * @method static Builder|ClassNoSQL newModelQuery()
 * @method static Builder|ClassNoSQL newQuery()
 * @method static Builder|ClassNoSQL query()
 * @method static Builder|ClassNoSQL whereCreatedAt($value)
 * @method static Builder|ClassNoSQL whereCreatedBy($value)
 * @method static Builder|ClassNoSQL whereCredit($value)
 * @method static Builder|ClassNoSQL whereDeletedAt($value)
 * @method static Builder|ClassNoSQL whereEndDate($value)
 * @method static Builder|ClassNoSQL whereExternalId($value)
 * @method static Builder|ClassNoSQL whereLmsId($value)
 * @method static Builder|ClassNoSQL whereGradeScaleId($value)
 * @method static Builder|ClassNoSQL whereId($value)
 * @method static Builder|ClassNoSQL whereLmsSystem($value)
 * @method static Builder|ClassNoSQL whereName($value)
 * @method static Builder|ClassNoSQL whereStartDate($value)
 * @method static Builder|ClassNoSQL whereStatus($value)
 * @method static Builder|ClassNoSQL whereTermId($value)
 * @method static Builder|ClassNoSQL whereUpdatedAt($value)
 * @method static Builder|ClassNoSQL onlyTrashed()
 * @method static Builder|ClassNoSQL withTrashed()
 * @method static Builder|ClassNoSQL withoutTrashed()
 * @method static Builder|ClassNoSQL whereCourseId($value)
 * @method static Builder|ClassNoSQL whereDescription($value)
 * @mixin Eloquent
 * @property string|null                          $zone
 * @property string|null                          $abc
 * @method static Builder|ClassSQL whereZone($value)
 * @property string|null                          $uuid            class id
 * @property int|null                             $school_id
 * @method static Builder|ClassSQL whereSchoolId($value)
 * @method static Builder|ClassSQL whereUuid($value)
 * @property int|null                             $subject_id
 * @method static Builder|ClassSQL whereSubjectId($value)
 * @property-read CourseSQL|null                  $course
 * @property-read GraduationCategorySQL           $graduationCategories
 * @property-read Collection|ClassAssignmentSQL[] $students
 * @property-read int|null                        $students_count
 * @property-read SubjectSQL|null                 $subject
 * @property-read Collection|ClassAssignmentSQL[] $teacherOfClassAssignment
 * @property-read int|null                        $teacher_of_class_assignment_count
 * @property-read Collection|ClassAssignmentSQL[] $teachers
 * @property-read int|null                        $teachers_count
 * @property-read TermSQL|null                    $terms
 * @property-read Collection|AttendanceSQL[]      $attendances
 * @property-read int|null                        $attendances_count
 * @property-read ClassNoSQL|null                 $classNoSql
 * @property-read LmsSQL|null                     $lms
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
           'zone', 'lms_id', 'school_id', 'subject_id'];

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
                    ->select('id', 'user_id', 'assignment', 'class_id', 'position', 'created_by')
                    ->where('assignment', '=', ClassAssignmentConstant::STUDENT)
                    ->whereNull('deleted_at');
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

    public function user()
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function calendarsRepeatWeeklyAndDaily()
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'class_id', 'id')
                                 ->where('repeat', CalendarRepeatTypeConstant::DAILY)
                                 ->orWhere('repeat', CalendarRepeatTypeConstant::WEEKLY);
    }

    public function calendarsRepeatIrregularly()
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'class_id', 'id')
                                 ->where('repeat', CalendarRepeatTypeConstant::IRREGULARLY)
                                 ->orderBy('start', 'ASC');
    }
}
