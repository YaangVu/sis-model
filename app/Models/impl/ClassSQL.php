<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Clazz;

/**
 * YaangVu\SisModel\App\Models\ClassSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property string|null $external_id
 * @property string|null $lms_id
 * @property float|null  $credit
 * @property int|null    $grade_scale_id
 * @property int|null    $graduation_category_id
 * @property int|null    $term_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $description
 * @property int|null    $course_id
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
 * @method static Builder|ClassNoSQL whereGraduationCategoryId($value)
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
 * @property string|null $cid  class id
 * @method static Builder|ClassSQL whereCid($value)
 * @property string|null $zone
 * @method static Builder|ClassSQL whereZone($value)
 * @property string|null $uuid class id
 * @property int|null    $school_id
 * @method static Builder|ClassSQL whereSchoolId($value)
 * @method static Builder|ClassSQL whereUuid($value)
 * @property int|null    $subject_id
 * @method static Builder|ClassSQL whereSubjectId($value)
 */
class ClassSQL extends Model implements Clazz
{
    use HasFactory, SoftDeletes;

    protected $table = self::table;

    protected $fillable
        = ['name', 'start_date', 'end_date', 'status',
           CodeConstant::EX_ID, 'lms_id', 'credit',
           'grade_scale_id', 'graduation_category_id', 'term_id',
           'course_id', 'description', CodeConstant::UUID, 'zone', 'lms_id', CodeConstant::UUID];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;
}
