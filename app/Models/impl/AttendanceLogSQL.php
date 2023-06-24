<?php
/**
 * @Author im.phien
 * @Date   Jun 27, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\AttendanceLog;
use YaangVu\SisModel\App\Models\MongoModel;


/**
 * YaangVu\SisModel\App\Models\impl\AttendanceLogSQL
 *
 * @property int                      $id
 * @property string|null              $email
 * @property string|null              $participant_display_name
 * @property string|null              $join_time
 * @property string|null              $leave_time
 * @property string|null              $status
 * @property int|null                 $created_by
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property int|null                 $zoom_meeting_id
 * @property float|null               $duration
 * @property string|null              $date
 * @property string|null              $user_uuid
 * @property string|null              $comment
 * @property string|null              $calendar_id
 * @property int|null                 $class_id
 * @property-read ClassSQL|null       $class
 * @property-read ZoomMeetingSQL|null $zoomMeeting
 * @method static Builder|AttendanceLogSQL newModelQuery()
 * @method static Builder|AttendanceLogSQL newQuery()
 * @method static Builder|AttendanceLogSQL query()
 * @method static Builder|AttendanceLogSQL whereCalendarId($value)
 * @method static Builder|AttendanceLogSQL whereClassId($value)
 * @method static Builder|AttendanceLogSQL whereComment($value)
 * @method static Builder|AttendanceLogSQL whereCreatedAt($value)
 * @method static Builder|AttendanceLogSQL whereCreatedBy($value)
 * @method static Builder|AttendanceLogSQL whereDate($value)
 * @method static Builder|AttendanceLogSQL whereDuration($value)
 * @method static Builder|AttendanceLogSQL whereEmail($value)
 * @method static Builder|AttendanceLogSQL whereId($value)
 * @method static Builder|AttendanceLogSQL whereJoinTime($value)
 * @method static Builder|AttendanceLogSQL whereLeaveTime($value)
 * @method static Builder|AttendanceLogSQL whereParticipantDisplayName($value)
 * @method static Builder|AttendanceLogSQL whereStatus($value)
 * @method static Builder|AttendanceLogSQL whereUpdatedAt($value)
 * @method static Builder|AttendanceLogSQL whereUserUuid($value)
 * @method static Builder|AttendanceLogSQL whereZoomMeetingId($value)
 * @mixin Eloquent
 */
class AttendanceLogSQL extends Model implements AttendanceLog
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['email', 'participant_display_name', 'join_time', 'leave_time', 'status', 'user_uuid', 'created_by', 'zoom_meeting_id', 'duration', 'date', 'comment', 'calendar_id', 'class_id'];

    /**
     * @Description
     *
     * @Author im.phien
     * @Date   Jun 27, 2022
     *
     * @return HasOne|\Jenssegers\Mongodb\Relations\HasOne
     */
    public function user(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return (new MongoModel())->hasOne(UserNoSQL::class, 'uuid', 'user_uuid');
    }

    /**
     * @Description
     *
     * @Author im.phien
     * @Date   Jun 27, 2022
     *
     * @return HasOne|\Jenssegers\Mongodb\Relations\HasOne
     */
    public function zoomMeeting(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return $this->hasOne(ZoomMeetingSQL::class, 'id', 'zoom_meeting_id');
    }

    /**
     * @Description
     *
     * @Author im.phien
     * @Date   Jun 27, 2022
     *
     * @return HasOne|\Jenssegers\Mongodb\Relations\HasOne
     */
    public function class(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return $this->hasOne(ClassSQL::class, 'id', 'class_id');
    }
}