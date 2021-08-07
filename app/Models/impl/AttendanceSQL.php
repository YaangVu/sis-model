<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Attendance;

/**
 * YaangVu\SisModel\App\Models\impl\AttendanceSQL
 *
 * @property int         $id
 * @property int         $class_id
 * @property string      calendar_id
 * @property string|null $user_uuid
 * @property int|null    $user_id
 * @property string|null $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CalendarSQL newModelQuery()
 * @method static Builder|CalendarSQL newQuery()
 * @method static Builder|CalendarSQL query()
 * @method static Builder|CalendarSQL whereCreatedAt($value)
 * @method static Builder|CalendarSQL whereCreatedBy($value)
 * @method static Builder|CalendarSQL whereStatus($value)
 * @method static Builder|CalendarSQL whereDescription($value)
 * @method static Builder|CalendarSQL whereId($value)
 * @method static Builder|CalendarSQL whereClassId($value)
 * @method static Builder|CalendarSQL whereCalendarId($value)
 * @method static Builder|CalendarSQL whereUserUuid($value)
 * @method static Builder|CalendarSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AttendanceSQL extends Model implements Attendance
{
    use HasFactory;

    protected $fillable = ['class_id', 'calendar_id', 'user_uuid', 'user_id', 'status', 'description'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}