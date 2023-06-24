<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
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
 * @property int                                                        $id
 * @property int|null                                                   $class_id
 * @property string                                                     $calendar_id
 * @property string|null                                                $user_uuid
 * @property int|null                                                   $user_id
 * @property string|null                                                $description
 * @property int|null                                                   $created_by
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property string|null              $status
 * @property string|null              $group
 * @property string|null              $start
 * @property string|null              $end
 * @property int|null                 $zoom_meeting_id
 * @property string|null              $join_time
 * @property string|null              $leave_time
 * @property string|null              $date
 * @property-read ClassSQL|null       $class
 * @property-read UserSQL|null        $user
 * @property-read ZoomMeetingSQL|null $zoomMeeting
 * @method static AttendanceFactory factory(...$parameters)
 * @method static Builder|AttendanceSQL newModelQuery()
 * @method static Builder|AttendanceSQL newQuery()
 * @method static Builder|AttendanceSQL query()
 * @method static Builder|AttendanceSQL whereCalendarId($value)
 * @method static Builder|AttendanceSQL whereClassId($value)
 * @method static Builder|AttendanceSQL whereCreatedAt($value)
 * @method static Builder|AttendanceSQL whereCreatedBy($value)
 * @method static Builder|AttendanceSQL whereDate($value)
 * @method static Builder|AttendanceSQL whereDescription($value)
 * @method static Builder|AttendanceSQL whereEnd($value)
 * @method static Builder|AttendanceSQL whereGroup($value)
 * @method static Builder|AttendanceSQL whereId($value)
 * @method static Builder|AttendanceSQL whereJoinTime($value)
 * @method static Builder|AttendanceSQL whereLeaveTime($value)
 * @method static Builder|AttendanceSQL whereStart($value)
 * @method static Builder|AttendanceSQL whereStatus($value)
 * @method static Builder|AttendanceSQL whereUpdatedAt($value)
 * @method static Builder|AttendanceSQL whereUserId($value)
 * @method static Builder|AttendanceSQL whereUserUuid($value)
 * @method static Builder|AttendanceSQL whereZoomMeetingId($value)
 * @mixin Eloquent
 */
class AttendanceSQL extends SQLModel implements Attendance
{
    use HasFactory;

    protected $fillable
        = ['class_id', 'calendar_id', 'user_uuid', 'user_id', 'status', 'description',
           'group', 'start', 'end', 'zoom_meeting_id', 'join_time', 'leave_time', 'date'];

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

    public function class(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return $this->hasOne(ClassSQL::class, 'id', 'class_id');
    }

    public function userNoSql(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return (new MongoModel())->hasOne(UserNoSQL::class, 'uuid', 'user_uuid');
    }
}
