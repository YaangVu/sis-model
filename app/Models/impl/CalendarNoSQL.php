<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
 * @method static Builder|CalendarSQL newModelQuery()
 * @method static Builder|CalendarSQL newQuery()
 * @method static Builder|CalendarSQL query()
 * @method static Builder|CalendarSQL whereClassId($value)
 * @method static Builder|CalendarSQL whereCreatedAt($value)
 * @method static Builder|CalendarSQL whereCreatedBy($value)
 * @method static Builder|CalendarSQL whereDeletedAt($value)
 * @method static Builder|CalendarSQL whereDescription($value)
 * @method static Builder|CalendarSQL whereEnd($value)
 * @method static Builder|CalendarSQL whereGroup($value)
 * @method static Builder|CalendarSQL whereId($value)
 * @method static Builder|CalendarSQL whereIsAllDay($value)
 * @method static Builder|CalendarSQL whereName($value)
 * @method static Builder|CalendarSQL whereRepeat($value)
 * @method static Builder|CalendarSQL whereSchoolId($value)
 * @method static Builder|CalendarSQL whereStart($value)
 * @method static Builder|CalendarSQL whereTimezone($value)
 * @method static Builder|CalendarSQL whereType($value)
 * @method static Builder|CalendarSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|CalendarSQL whereExternalId($value)
 * @method static Builder|CalendarSQL whereUuid($value)
 */
class CalendarNoSQL extends Model implements Calendar
{
    use HasFactory;

    protected $fillable = ['*'];

    protected $table = self::table;

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;

    public function user(): BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function class(): BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(ClassSql::class, 'class_id', 'id');
    }

    public function getStartAttribute($value): Carbon|string|null
    {
        if (gettype($value) !== 'string')
            return Carbon::createFromTimestampMsUTC($value);

        return $value;
    }

    public function getEndAttribute($value): Carbon|string|null
    {
        if (gettype($value) !== 'string')
            return Carbon::createFromTimestampMsUTC($value);

        return $value;
    }
}
