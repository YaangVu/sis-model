<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Subject;

/**
 * YaangVu\SisModel\App\Models\SubjectSQL
 *
 * @property int         $id
 * @property string|null $uuid SubjectSQL id
 * @property string|null $external_id
 * @property string      $name
 * @property string      $credit
 * @property string|null $description
 * @property string|null $status
 * @property int|null    $grade_id
 * @property int|null    $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
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
 * @method static Builder|SubjectSQL whereSchoolId($value)
 * @method static Builder|SubjectSQL whereStatus($value)
 * @method static Builder|SubjectSQL whereUpdatedAt($value)
 * @method static Builder|SubjectSQL whereUuid($value)
 * @mixin Eloquent
 * @property int|null    $code
 * @method static Builder|SubjectSQL whereCode($value)
 * @property string|null $weight
 * @method static Builder|SubjectSQL whereWeight($value)
 * @property-read \YaangVu\SisModel\App\Models\impl\GradeSQL|null $grades
 */
class SubjectSQL extends Model implements Subject
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

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
        ];

    public function grades(): BelongsTo
    {
        return $this->BelongsTo(GradeSQL::class, 'grade_id');
    }
}
