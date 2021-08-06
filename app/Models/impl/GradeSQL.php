<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Grade;
use YaangVu\SisModel\App\Models\Program;


/**
 * YaangVu\SisModel\App\Models\GradeSQL
 *
 * @property int         $id
 * @property string      $name
 * @property int|null    $lms_id
 * @property int|null    $school_id
 * @property string|null $description
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CourseSQL newModelQuery()
 * @method static Builder|CourseSQL newQuery()
 * @method static Builder|CourseSQL query()
 * @method static Builder|CourseSQL whereCreatedAt($value)
 * @method static Builder|CourseSQL whereCreatedBy($value)
 * @method static Builder|CourseSQL whereDeletedAt($value)
 * @method static Builder|CourseSQL whereDescription($value)
 * @method static Builder|CourseSQL whereId($value)
 * @method static Builder|CourseSQL whereLmsId($value)
 * @method static Builder|CourseSQL whereName($value)
 * @method static Builder|CourseSQL whereSchoolId($value)
 * @method static Builder|CourseSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $external_id
 * @method static Builder|CourseSQL whereExternalId($value)
 * @property string|null $weight
 * @method static Builder|Program whereWeight($value)
 * @method static Builder|CourseSQL onlyTrashed()
 * @method static Builder|CourseSQL withTrashed()
 * @method static Builder|CourseSQL withoutTrashed()
 * @property string|null $uuid course id
 * @method static Builder|CourseSQL whereUuid($value)
 * @property int|null    $index
 * @method static Builder|GradeSQL whereIndex($value)
 */
class GradeSQL extends Model implements Grade
{
    use HasFactory, SoftDeletes;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['id', 'name', 'school_id'];

}
