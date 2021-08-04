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
use YaangVu\SisModel\App\Models\ClassActivityCategory;

/**
 * YaangVu\SisModel\App\Models\impl\ClassActivityCategorySQL
 *
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null    $school_id
 * @property int|null    $class_id
 * @property int|null    $activity_category_id
 * @property int|null    $weight
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CalendarSQL newModelQuery()
 * @method static Builder|CalendarSQL newQuery()
 * @method static Builder|CalendarSQL query()
 * @method static Builder|CalendarSQL whereCreatedAt($value)
 * @method static Builder|CalendarSQL whereCreatedBy($value)
 * @method static Builder|CalendarSQL whereDeletedAt($value)
 * @method static Builder|CalendarSQL whereDescription($value)
 * @method static Builder|CalendarSQL whereId($value)
 * @method static Builder|CalendarSQL whereName($value)
 * @method static Builder|CalendarSQL whereSchoolId($value)
 * @method static Builder|CalendarSQL whereClassId($value)
 * @method static Builder|CalendarSQL whereActivityCategoryId($value)
 * @method static Builder|CalendarSQL whereWeight($value)
 * @method static Builder|CalendarSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|CalendarSQL whereExternalId($value)
 * @method static Builder|CalendarSQL whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|ClassActivityCategorySQL onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|ClassActivityCategorySQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ClassActivityCategorySQL withoutTrashed()
 */
class ClassActivityCategorySQL extends Model implements ClassActivityCategory
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'weight', 'description', 'school_id', 'activity_category_id', 'class_id',CodeConstant::UUID,CodeConstant::EX_ID
    ];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}