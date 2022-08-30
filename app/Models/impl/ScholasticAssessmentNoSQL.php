<?php

namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ScholasticAssessment;


/**
 * YaangVu\SisModel\App\Models\ScholasticAssessmentNoSQL
 *
 * @property int         $id
 * @property string|null $student_code
 * @property int|null    $student_id
 * @property string|null $student_nosql_id
 * @property int|null    $grade
 * @property int|null    $school_id
 * @property string|null $school_uuid
 * @property int|null    $imported_by
 * @property string|null $imported_by_nosql
 * @property Carbon|null $smi_last_quantile_date
 * @property int|null    $smi_last_quantile
 * @property string|null $smi_last_performance_level
 * @property string|null $smi_percentile
 * @property string|null $smi_nce
 * @property string|null $smi_stanine
 * @property string|null $smi_growth_in_date_range
 * @property string|null $smi_test_taken
 * @property Carbon|null $sri_last_lexile_date
 * @property int|null    $sri_last_lexile_score
 * @property string|null $sri_last_lexile_performance_level
 * @property string|null $sri_percentile
 * @property string|null $sri_nce
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read  Smi[] $smi
 * @property-read  Sri[] $sri
 * @method static Builder|ScholasticAssessmentNoSQL newModelQuery()
 * @method static Builder|ScholasticAssessmentNoSQL newQuery()
 * @method static Builder|ScholasticAssessmentNoSQL query()
 * @method static Builder|ScholasticAssessmentNoSQL whereStudentCode($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereStudentId($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereStudentNosqlId($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereGrade($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSchoolId($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSchoolUuid($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereImportedBy($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereImportedByNosql($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiLastQuantileDate($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiLastQuantile($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiLastPerformanceLevel($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiPercentile($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiNce($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiStanine($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiGrowthInDateRange($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSmiTestTaken($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSriLastLexileDate($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSriLastLexileScore($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSriLastLexilePerformanceLevel($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSriPercentile($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereSriNce($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereCreatedAt($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereDeletedAt($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereId($value)
 * @method static Builder|ScholasticAssessmentNoSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ScholasticAssessmentNoSQL extends Model implements ScholasticAssessment
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string
     */
    public string $code = CodeConstant::UUID;

    protected $connection = DbConnectionConstant::NOSQL;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_nosql_id', '_id');
    }
}
