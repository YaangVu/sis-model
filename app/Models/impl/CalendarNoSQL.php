<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Calendar;

/**
 * YaangVu\SisModel\App\Models\CalendarNoSQL
 *
 * @property int         $id
 * @property string|null $type Type of calendar: event, holiday, class schedule, activity
 * @property string|null $name event name
 * @property string|null $description
 * @property int|null    $school_id
 * @property int|null    $class_id
 * @property string|null $group
 * @property string|null $start
 * @property string|null $end
 * @property bool|null   $is_all_day
 * @property string|null $repeat
 * @property string|null $timezone
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CalendarNoSQL newModelQuery()
 * @method static Builder|CalendarNoSQL newQuery()
 * @method static Builder|CalendarNoSQL query()
 * @method static Builder|CalendarNoSQL whereClassId($value)
 * @method static Builder|CalendarNoSQL whereCreatedAt($value)
 * @method static Builder|CalendarNoSQL whereCreatedBy($value)
 * @method static Builder|CalendarNoSQL whereDeletedAt($value)
 * @method static Builder|CalendarNoSQL whereDescription($value)
 * @method static Builder|CalendarNoSQL whereEnd($value)
 * @method static Builder|CalendarNoSQL whereGroup($value)
 * @method static Builder|CalendarNoSQL whereId($value)
 * @method static Builder|CalendarNoSQL whereIsAllDay($value)
 * @method static Builder|CalendarNoSQL whereName($value)
 * @method static Builder|CalendarNoSQL whereRepeat($value)
 * @method static Builder|CalendarNoSQL whereSchoolId($value)
 * @method static Builder|CalendarNoSQL whereStart($value)
 * @method static Builder|CalendarNoSQL whereTimezone($value)
 * @method static Builder|CalendarNoSQL whereType($value)
 * @method static Builder|CalendarNoSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CalendarNoSQL extends Model implements Calendar
{
    use HasFactory;

    protected $fillable = ['*'];

    protected $table = self::table;

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;
}
