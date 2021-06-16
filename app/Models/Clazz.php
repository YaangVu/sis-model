<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Clazz
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property string|null $external_id
 * @property string|null $lms_system
 * @property float|null  $credit
 * @property int|null    $grade_scale_id
 * @property int|null    $graduation_category_id
 * @property int|null    $term_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Clazz newModelQuery()
 * @method static Builder|Clazz newQuery()
 * @method static Builder|Clazz query()
 * @method static Builder|Clazz whereCreatedAt($value)
 * @method static Builder|Clazz whereCreatedBy($value)
 * @method static Builder|Clazz whereCredit($value)
 * @method static Builder|Clazz whereDeletedAt($value)
 * @method static Builder|Clazz whereEndDate($value)
 * @method static Builder|Clazz whereExternalId($value)
 * @method static Builder|Clazz whereGradeScaleId($value)
 * @method static Builder|Clazz whereGraduationCategoryId($value)
 * @method static Builder|Clazz whereId($value)
 * @method static Builder|Clazz whereLmsSystem($value)
 * @method static Builder|Clazz whereName($value)
 * @method static Builder|Clazz whereStartDate($value)
 * @method static Builder|Clazz whereStatus($value)
 * @method static Builder|Clazz whereTermId($value)
 * @method static Builder|Clazz whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|Clazz onlyTrashed()
 * @method static Builder|Clazz withTrashed()
 * @method static Builder|Clazz withoutTrashed()
 */
class Clazz extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'classes';

    protected $connection = DbConnectionConstant::SQL;
}
