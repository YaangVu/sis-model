<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\Constant\UserJoinZoomMeetingConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\ZoomMeeting;

/**
 * YaangVu\SisModel\App\Models\ScoreSQL
 *
 * @property int         $id
 * @property string      $title
 * @property string      $description
 * @property string      $timezone
 * @property string      $zoom_meeting_type
 * @property string      $participant_join_before_host
 * @property string      $type_guest
 * @property string      $link_room
 * @property string      $pmi
 * @property boolean     $student_attendance
 * @property int         $duration
 * @property int         $notification_before
 * @property boolean     $join_before_host
 * @property int         $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ZoomMeetingSQL newQuery()
 * @method static Builder|ZoomMeetingSQL query()
 * @method static Builder|ZoomMeetingSQL whereCreatedAt($value)
 * @method static Builder|ZoomMeetingSQL whereCreatedBy($value)
 * @method static Builder|ZoomMeetingSQL whereDeletedAt($value)
 * @method static Builder|ZoomMeetingSQL whereId($value)
 * @method static Builder|ZoomMeetingSQL whereUpdatedAt($value)
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

    public function calendars(): \Illuminate\Database\Eloquent\Relations\HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return (new MongoModel())->hasMany(CalendarNoSQL::class, 'zoom_meeting_id', 'id');
    }

    public function hostZoomMeeting(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ZoomParticipantSQL::class, 'zoom_meeting_id', 'id')
                    ->where('user_join_meeting', UserJoinZoomMeetingConstant::HOST);
    }

    public function school(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(SchoolSQL::class, 'id', 'school_id');
    }
}
