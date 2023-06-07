<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Clazz;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\Term;


/**
 * YaangVu\SisModel\App\Models\TermSQL
 *
 * @property int                         $id
 * @property string                      $name
 * @property string|null                 $start_date
 * @property string|null                 $end_date
 * @property string|null                 $status
 * @property int|null                    $school_id
 * @property string|null                 $external_id
 * @property string|null                 $description
 * @property int|null                    $created_by
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @property Carbon|null                 $deleted_at
 * @property-read Collection|Clazz[]     $classes
 * @property-read int|null               $classes_count
 * @property string|null                 $term_course_code
 * @method static Builder|TermSQL newModelQuery()
 * @method static Builder|TermSQL newQuery()
 * @method static Builder|TermSQL onlyTrashed()
 * @method static Builder|TermSQL query()
 * @method static Builder|TermSQL whereCreatedAt($value)
 * @method static Builder|TermSQL whereCreatedBy($value)
 * @method static Builder|TermSQL whereDeletedAt($value)
 * @method static Builder|TermSQL whereEndDate($value)
 * @method static Builder|TermSQL whereExternalId($value)
 * @method static Builder|TermSQL whereDescription($value)
 * @method static Builder|TermSQL whereId($value)
 * @method static Builder|TermSQL whereName($value)
 * @method static Builder|TermSQL whereSchoolId($value)
 * @method static Builder|TermSQL whereStartDate($value)
 * @method static Builder|TermSQL whereStatus($value)
 * @method static Builder|TermSQL whereUpdatedAt($value)
 * @method static Builder|TermSQL withTrashed()
 * @method static Builder|TermSQL withoutTrashed()
 * @mixin Eloquent
 * @property int|null                    $lms_id
 * @method static Builder|ProgramSQL whereLmsId($value)
 * @property string|null                 $uuid
 * @method static Builder|TermSQL whereUuid($value)
 * @property-read Collection|CourseSQL[] $courses
 * @property-read int|null               $courses_count
 * @property string|null                 $school_year
 * @property string|null                 $semester_number
 * @method static \Illuminate\Database\Eloquent\Builder|TermSQL whereSchoolYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermSQL whereSemesterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermSQL whereTermCourseCode($value)
 * @property int|null                    $ref_id
 * @method static \Illuminate\Database\Eloquent\Builder|TermSQL whereRefId($value)
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
