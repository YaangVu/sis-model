<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Course;
use YaangVu\SisModel\App\Models\Program;

/**
 * YaangVu\SisModel\App\Models\CourseSQL
 *
 * @property int              $id
 * @property string           $name
 * @property int|null         $lms_id
 * @property int|null         $school_id
 * @property string|null      $description
 * @property int|null         $created_by
 * @property Carbon|null      $created_at
 * @property Carbon|null      $updated_at
 * @property string|null      $deleted_at
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
 * @property string|null      $external_id
 * @method static Builder|CourseSQL whereExternalId($value)
 * @property string|null      $weight
 * @method static Builder|Program whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|CourseSQL onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|CourseSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CourseSQL withoutTrashed()
 * @property string|null      $uuid course id
 * @method static Builder|CourseSQL whereUuid($value)
 * @property-read LmsSQL|null $lms
 */
class CourseSQL extends Model implements Course
{
    use HasFactory, SoftDeletes;

    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

    protected $fillable = ['lms_id', 'school_id', 'description', 'name', CodeConstant::EX_ID, CodeConstant::UUID, CodeConstant::UUID, 'weight'];

    public string $code = CodeConstant::UUID;

    public function lms(): BelongsTo
    {
        return $this->belongsTo(LmsSQL::class);
    }

}
