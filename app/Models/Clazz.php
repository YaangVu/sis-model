<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * YaangVu\SisModel\App\Models\Clazz
 *
 * @property int $id
 * @property string $name
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property string|null $external_id
 * @property string|null $lms_system
 * @property int|null $created_by
 * @property int|null $credit
 * @property int|null $course_id
 * @property int|null $grade_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz query()
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereLmsSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clazz whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Clazz extends Model
{
    use HasFactory;

    protected $table = 'classes';
}
