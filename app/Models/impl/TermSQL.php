<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\Term;


/**
 * YaangVu\SisModel\App\Models\impl\TermSQL
 *
 * @property int                             $id
 * @property string|null                     $uuid
 * @property string|null                     $external_id
 * @property string                          $name
 * @property string|null                     $start_date
 * @property string|null                     $end_date
 * @property string|null                     $description
 * @property string|null                     $status
 * @property int|null                        $school_id
 * @property int|null                        $created_by
 * @property Carbon|null                     $created_at
 * @property Carbon|null                     $updated_at
 * @property Carbon|null                     $deleted_at
 * @property string|null                     $term_course_code
 * @property string|null                     $school_year
 * @property string|null                     $semester_number
 * @property int|null                        $ref_id
 * @property-read Collection<int, ClassSQL>  $classes
 * @property-read int|null                   $classes_count
 * @property-read Collection<int, CourseSQL> $courses
 * @property-read int|null                   $courses_count
 * @method static Builder|TermSQL newModelQuery()
 * @method static Builder|TermSQL newQuery()
 * @method static Builder|TermSQL onlyTrashed()
 * @method static Builder|TermSQL query()
 * @method static Builder|TermSQL whereCreatedAt($value)
 * @method static Builder|TermSQL whereCreatedBy($value)
 * @method static Builder|TermSQL whereDeletedAt($value)
 * @method static Builder|TermSQL whereDescription($value)
 * @method static Builder|TermSQL whereEndDate($value)
 * @method static Builder|TermSQL whereExternalId($value)
 * @method static Builder|TermSQL whereId($value)
 * @method static Builder|TermSQL whereName($value)
 * @method static Builder|TermSQL whereRefId($value)
 * @method static Builder|TermSQL whereSchoolId($value)
 * @method static Builder|TermSQL whereSchoolYear($value)
 * @method static Builder|TermSQL whereSemesterNumber($value)
 * @method static Builder|TermSQL whereStartDate($value)
 * @method static Builder|TermSQL whereStatus($value)
 * @method static Builder|TermSQL whereTermCourseCode($value)
 * @method static Builder|TermSQL whereUpdatedAt($value)
 * @method static Builder|TermSQL whereUuid($value)
 * @method static Builder|TermSQL withTrashed()
 * @method static Builder|TermSQL withoutTrashed()
 * @mixin Eloquent
 */
class TermSQL extends Model implements Term
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date', 'status', 'school_id', CodeConstant::EX_ID, 'description', 'lms_id', CodeConstant::UUID, 'term_course_code', 'school_year', 'semester_number', 'ref_id'];

    protected $table = self::table;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string
     */
    public string $code = CodeConstant::UUID;

    protected $connection = DbConnectionConstant::SQL;

    public function classes(): HasMany
    {
        return $this->hasMany(ClassSQL::class, 'term_id');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(CourseSQL::class);
    }

    public function user()
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }
}
