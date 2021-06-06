<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\SisModel\Database\Factories\CourseFactory;

/**
 * YaangVu\SisModel\App\Models\Course
 *
 * @property int         $id
 * @property string|null $name   course name
 * @property string|null $system From which system?
 * @property string|null $external_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereDeletedAt($value)
 * @method static Builder|Course whereExternalId($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereName($value)
 * @method static Builder|Course whereSystem($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property int|null $term_id
 * @property string|null $lms_system
 * @property int|null $created_by
 * @method static CourseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Query\Builder|Course onlyTrashed()
 * @method static Builder|Course whereCreatedBy($value)
 * @method static Builder|Course whereEndDate($value)
 * @method static Builder|Course whereLmsSystem($value)
 * @method static Builder|Course whereStartDate($value)
 * @method static Builder|Course whereStatus($value)
 * @method static Builder|Course whereTermId($value)
 * @method static \Illuminate\Database\Query\Builder|Course withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Course withoutTrashed()
 * @mixin \Eloquent
 */
class Course extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM];
}
