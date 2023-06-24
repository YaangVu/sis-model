<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Course;

/**
 * YaangVu\SisModel\App\Models\impl\CourseSQL
 *
 * @property int                                                $id
 * @property string|null                                        $uuid course id
 * @property string|null      $external_id
 * @property string           $name
 * @property int|null         $lms_id
 * @property int|null         $school_id
 * @property string|null      $description
 * @property float|null       $weight
 * @property int|null         $created_by
 * @property Carbon|null      $created_at
 * @property Carbon|null      $updated_at
 * @property Carbon|null      $deleted_at
 * @property-read LmsSQL|null $lms
 * @method static Builder|CourseSQL newModelQuery()
 * @method static Builder|CourseSQL newQuery()
 * @method static \Illuminate\Database\Query\Builder|CourseSQL onlyTrashed()
 * @method static Builder|CourseSQL query()
 * @method static Builder|CourseSQL whereCreatedAt($value)
 * @method static Builder|CourseSQL whereCreatedBy($value)
 * @method static Builder|CourseSQL whereDeletedAt($value)
 * @method static Builder|CourseSQL whereDescription($value)
 * @method static Builder|CourseSQL whereExternalId($value)
 * @method static Builder|CourseSQL whereId($value)
 * @method static Builder|CourseSQL whereLmsId($value)
 * @method static Builder|CourseSQL whereName($value)
 * @method static Builder|CourseSQL whereSchoolId($value)
 * @method static Builder|CourseSQL whereUpdatedAt($value)
 * @method static Builder|CourseSQL whereUuid($value)
 * @method static Builder|CourseSQL whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|CourseSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CourseSQL withoutTrashed()
 * @mixin Eloquent
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
