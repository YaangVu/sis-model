<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\Subject;
use YaangVu\SisModel\App\Models\SubjectType;

/**
 * YaangVu\SisModel\App\Models\SubjectSQL
 *
 * @property int                     $id
 * @property string|null             $uuid SubjectSQL id
 * @property string|null             $external_id
 * @property string                  $name
 * @property string                  $credit
 * @property string|null             $description
 * @property string|null             $status
 * @property string|null             $subject_display_name
 * @property int|null                $grade_id
 * @property int|null                $subject_type_id
 * @property int|null                $school_id
 * @property int|null                $created_by
 * @property Carbon|null             $created_at
 * @property Carbon|null             $updated_at
 * @property string|null             $deleted_at
 * @method static Builder|SubjectSQL newModelQuery()
 * @method static Builder|SubjectSQL newQuery()
 * @method static Builder|SubjectSQL query()
 * @method static Builder|SubjectSQL whereCreatedAt($value)
 * @method static Builder|SubjectSQL whereCreatedBy($value)
 * @method static Builder|SubjectSQL whereCredit($value)
 * @method static Builder|SubjectSQL whereDeletedAt($value)
 * @method static Builder|SubjectSQL whereDescription($value)
 * @method static Builder|SubjectSQL whereExternalId($value)
 * @method static Builder|SubjectSQL whereGradeId($value)
 * @method static Builder|SubjectSQL whereId($value)
 * @method static Builder|SubjectSQL whereName($value)
 * @method static Builder|SubjectSQL whereSubjectDisplayName($value)
 * @method static Builder|SubjectSQL whereSubjectTypeId($value)
 * @method static Builder|SubjectSQL whereSchoolId($value)
 * @method static Builder|SubjectSQL whereStatus($value)
 * @method static Builder|SubjectSQL whereUpdatedAt($value)
 * @method static Builder|SubjectSQL whereUuid($value)
 * @mixin Eloquent
 * @property int|null                $code
 * @method static Builder|SubjectSQL whereCode($value)
 * @property string|null             $weight
 * @property-read mixed              $rules
 * @property-read GradeSQL|null      $grades
 * @method static Builder|SubjectSQL whereWeight($value)
 * @property int|null                $grade_scale_id
 * @method static Builder|SubjectSQL whereGradeScaleId($value)
 * @property-read GradeScaleSQL|null $gradeScale
 * @property-read mixed              $grade_scales
 * @property string                  $type
 * @method static Builder|SubjectSQL whereType($value)
 * @property-read mixed              $graduation_category
 * @property-read \YaangVu\SisModel\App\Models\impl\SubjectTypeSQL|null $subjectType
 */
class SubjectSQL extends Model implements Subject
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $appends = ['rules', 'grade_scales', 'graduation_category'];

    protected $fillable
        = [
            CodeConstant::UUID,
            CodeConstant::EX_ID,
            'name',
            'credit',
            'description',
            'status',
            'code',
            'grade_id',
            'school_id',
            'weight',
            'grade_scale_id',
            'type',
            'subject_type_id',
            'subject_display_name'
        ];

    public function grades(): BelongsTo
    {
        return $this->BelongsTo(GradeSQL::class, 'grade_id');
    }

    public function gradeScale(): BelongsTo
    {
        return $this->belongsTo(GradeScaleSQL::class);
    }

    public function getRulesAttribute($value)
    {
        return SubjectRuleSQL::where('subject_id', $this->id)->get();
    }

    public function getGradeScalesAttribute($value)
    {
        return GradeScaleSQL::where('id', $this->grade_scale_id)->get();
    }

    public function getGraduationCategoryAttribute($value)
    {
        $graduationIds      = [];
        $graduationSubjects = GraduationCategorySubjectSQL::where('subject_id', $this->id)->get();
        foreach ($graduationSubjects as $graduationSubject) {
            $graduationIds[] = $graduationSubject->graduation_category_id;
        }

        if ($graduationIds)
            return GraduationCategorySQL::whereIn('id', $graduationIds)->get();

        return [];
    }

    public function user()
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function subjectType(): BelongsTo
    {
        return $this->BelongsTo(SubjectTypeSQL::class, 'subject_type_id');
    }
}
