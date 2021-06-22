<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Course
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
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereCreatedBy($value)
 * @method static Builder|Course whereDeletedAt($value)
 * @method static Builder|Course whereDescription($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereLmsId($value)
 * @method static Builder|Course whereName($value)
 * @method static Builder|Course whereSchoolId($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $external_id
 * @method static Builder|Course whereExternalId($value)
 */
class Course extends Model
{
    protected $fillable = ['lms_id', 'school_id', 'description', 'name', CodeConstant::EX_ID];

    protected $connection = DbConnectionConstant::SQL;
}
