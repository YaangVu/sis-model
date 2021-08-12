<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\Attendance;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\impl\AttendanceSQL
 *
 * @property int         $id
 * @property int         $class_id
 * @property string      $calendar_id
 * @property string|null $user_uuid
 * @property int|null    $user_id
 * @property string|null $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property int|null    $created_by
 * @property Carbon|null $updated_at
 * @method static Builder|AttendanceSQL newModelQuery()
 * @method static Builder|AttendanceSQL newQuery()
 * @method static Builder|AttendanceSQL query()
 * @method static Builder|AttendanceSQL whereCreatedAt($value)
 * @method static Builder|AttendanceSQL whereCreatedBy($value)
 * @method static Builder|AttendanceSQL whereStatus($value)
 * @method static Builder|AttendanceSQL whereDescription($value)
 * @method static Builder|AttendanceSQL whereId($value)
 * @method static Builder|AttendanceSQL whereClassId($value)
 * @method static Builder|AttendanceSQL whereCalendarId($value)
 * @method static Builder|AttendanceSQL whereUserUuid($value)
 * @method static Builder|AttendanceSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AttendanceSQL extends SQLModel implements Attendance
{
    use HasFactory;

    protected $fillable = ['class_id', 'calendar_id', 'user_uuid', 'user_id', 'status', 'description'];

    protected $table = self::table;
}