<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Relations\HasMany;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\Constant\UserJoinZoomMeetingConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\ZoomMeeting;

/**
 * YaangVu\SisModel\App\Models\impl\ZoomMeetingSQL
 *
 * @property int                                      $id
 * @property string|null                              $uuid
 * @property string|null                              $title
 * @property string|null                              $description
 * @property mixed                                    $password
 * @property string                                   $zoom_meeting_type
 * @property int                                      $duration
 * @property string|null                              $timezone
 * @property int|null                                 $notification_before
 * @property bool                                     $join_before_host
 * @property string|null                              $participant_join_before_host
 * @property string                                   $type_guest
 * @property string|null                              $link_zoom
 * @property int                                      $created_by
 * @property Carbon|null                              $created_at
 * @property Carbon|null                              $updated_at
 * @property int|null                                 $zoom_meeting_ui_id
 * @property string|null                              $repeat
 * @property string|null                              $start
 * @property string|null                              $end
 * @property string|null                              $from_time
 * @property int|null                                 $school_id
 * @property string|null                              $pmi
 * @property bool|null                                $student_attendance
 * @property-read ZoomParticipantSQL|null             $hostZoomMeeting
 * @property-read Collection<int, ZoomParticipantSQL> $participants
 * @property-read int|null                            $participants_count
 * @property-read SchoolSQL|null                      $school
 * @method static Builder|ZoomMeetingSQL newModelQuery()
 * @method static Builder|ZoomMeetingSQL newQuery()
 * @method static Builder|ZoomMeetingSQL query()
 * @method static Builder|ZoomMeetingSQL whereCreatedAt($value)
 * @method static Builder|ZoomMeetingSQL whereCreatedBy($value)
 * @method static Builder|ZoomMeetingSQL whereDescription($value)
 * @method static Builder|ZoomMeetingSQL whereDuration($value)
 * @method static Builder|ZoomMeetingSQL whereEnd($value)
 * @method static Builder|ZoomMeetingSQL whereFromTime($value)
 * @method static Builder|ZoomMeetingSQL whereId($value)
 * @method static Builder|ZoomMeetingSQL whereJoinBeforeHost($value)
 * @method static Builder|ZoomMeetingSQL whereLinkZoom($value)
 * @method static Builder|ZoomMeetingSQL whereNotificationBefore($value)
 * @method static Builder|ZoomMeetingSQL whereParticipantJoinBeforeHost($value)
 * @method static Builder|ZoomMeetingSQL wherePassword($value)
 * @method static Builder|ZoomMeetingSQL wherePmi($value)
 * @method static Builder|ZoomMeetingSQL whereRepeat($value)
 * @method static Builder|ZoomMeetingSQL whereSchoolId($value)
 * @method static Builder|ZoomMeetingSQL whereStart($value)
 * @method static Builder|ZoomMeetingSQL whereStudentAttendance($value)
 * @method static Builder|ZoomMeetingSQL whereTimezone($value)
 * @method static Builder|ZoomMeetingSQL whereTitle($value)
 * @method static Builder|ZoomMeetingSQL whereTypeGuest($value)
 * @method static Builder|ZoomMeetingSQL whereUpdatedAt($value)
 * @method static Builder|ZoomMeetingSQL whereUuid($value)
 * @method static Builder|ZoomMeetingSQL whereZoomMeetingType($value)
 * @method static Builder|ZoomMeetingSQL whereZoomMeetingUiId($value)
 * @mixin Eloquent
 */
class ZoomMeetingSQL extends Model implements ZoomMeeting
{
    use HasFactory;

    protected $table = self::table;

    protected $casts
        = [
            'password' => 'encrypted',
        ];

    protected $fillable
        = [
            CodeConstant::UUID,
            'title',
            'description',
            'password',
            'zoom_meeting_type',
            'duration',
            'timezone',
            'notification_before',
            'join_before_host',
            'participant_join_before_host',
            'type_guest',
            'link_zoom',
            'zoom_meeting_ui_id',
            'repeat',
            'start',
            'end',
            'from_time',
            'school_id',
            'pmi',
            'student_attendance'
        ];

    protected $connection = DbConnectionConstant::SQL;

    public function participants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ZoomParticipantSQL::class, 'zoom_meeting_id', 'id')
                    ->where('user_join_meeting', UserJoinZoomMeetingConstant::STUDENT);
    }

    public function calendars(): \Illuminate\Database\Eloquent\Relations\HasMany|HasMany
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'zoom_meeting_id', 'id');
    }

    public function hostZoomMeeting(): HasOne
    {
        return $this->hasOne(ZoomParticipantSQL::class, 'zoom_meeting_id', 'id')
                    ->where('user_join_meeting', UserJoinZoomMeetingConstant::HOST);
    }

    public function school(): HasOne
    {
        return $this->hasOne(SchoolSQL::class, 'id', 'school_id');
    }
}
