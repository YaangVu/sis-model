<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ClassActivity;

/**
 * @property int         $id
 * @property string|null $final_score
 * @property string|null $class_activity_category_id
 * @property int|null    $user_id
 * @property int|null    $class_id
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
 * @method static Builder|CalendarSQL whereClassId($value)
 * @method static Builder|CalendarSQL whereClassActivityCategoryId($value)
 * @method static Builder|CalendarSQL whereUserId($value)
 * @method static Builder|CalendarSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|CalendarSQL whereExternalId($value)
 * @method static Builder|CalendarSQL whereUuid($value)
 */
class ClassActivityNoSql extends Model implements ClassActivity
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;
}