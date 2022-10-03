<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\Attendance;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\Database\Factories\AttendanceFactory;

/**
 * YaangVu\SisModel\App\Models\impl\AttendanceSQL
 *
 * @property int               $id
 * @property int               $class_id
 * @property string            $calendar_id
 * @property string|null       $user_uuid
 * @property int|null          $user_id
 * @property string|null       $status
 * @property string|null       $description
 * @property Carbon|null       $created_at
 * @property int|null          $created_by
 * @property Carbon|null       $updated_at
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
 * @method static Builder|AttendanceSQL whereZoomMeetingId($value)
 * @method static Builder|AttendanceSQL whereUserUuid($value)
 * @method static Builder|AttendanceSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null       $group
 * @method static Builder|AttendanceSQL whereGroup($value)
 * @method static Builder|AttendanceSQL whereUserId($value)
 * @property-read UserSQL|null $user
 * @property string|null       $start
 * @method static Builder|AttendanceSQL whereStart($value)
 * @property string|null       $end
 * @method static Builder|AttendanceSQL whereEnd($value)
 * @method static \YaangVu\SisModel\Database\Factories\AttendanceFactory factory(...$parameters)
 */
class AttendanceSQL extends SQLModel implements Attendance
{
    use HasFactory;

    protected $fillable = ['class_id', 'calendar_id', 'user_uuid', 'user_id', 'status', 'description', 'group', 'start', 'end','zoom_meeting_id'];

    protected $table = self::table;

    public function calendar(): BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return (new MongoModel())->belongsTo(CalendarNoSQL::class, 'calendar_id', '_id');
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'user_id', 'id');
    }

    public static function newFactory(): AttendanceFactory
    {
        return new AttendanceFactory();
    }

    public function zoomMeeting(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return $this->hasOne(ZoomMeetingSQL::class, 'id', 'zoom_meeting_id');
    }
}
