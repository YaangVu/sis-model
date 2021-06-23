<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Course;

/**
 * YaangVu\SisModel\App\Models\CourseNoSQL
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
 * @method static Builder|CourseNoSQL newModelQuery()
 * @method static Builder|CourseNoSQL newQuery()
 * @method static Builder|CourseNoSQL query()
 * @method static Builder|CourseNoSQL whereCreatedAt($value)
 * @method static Builder|CourseNoSQL whereCreatedBy($value)
 * @method static Builder|CourseNoSQL whereDeletedAt($value)
 * @method static Builder|CourseNoSQL whereDescription($value)
 * @method static Builder|CourseNoSQL whereId($value)
 * @method static Builder|CourseNoSQL whereLmsId($value)
 * @method static Builder|CourseNoSQL whereName($value)
 * @method static Builder|CourseNoSQL whereSchoolId($value)
 * @method static Builder|CourseNoSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $external_id
 * @method static Builder|CourseNoSQL whereExternalId($value)
 */
class CourseNoSQL extends Model implements Course
{
    use Authenticatable, Authorizable, HasFactory, SoftDeletes;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $table = self::table;

    public string $code = CodeConstant::CO_ID;

    protected $fillable = [];
}
