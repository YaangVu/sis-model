<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\ZoomParticipant;

/**
 * YaangVu\SisModel\App\Models\impl\ZoomParticipantSQL
 *
 * @property int                   $id
 * @property int                   $zoom_meeting_id
 * @property string                $user_uuid
 * @property string                $user_join_meeting
 * @property bool                  $student_attendance
 * @property string                $type_guest
 * @property int|null              $class_id
 * @property Carbon|null           $created_at
 * @property Carbon|null           $updated_at
 * @property-read ClassSQL|null    $classes
 * @property-read ZoomHostSQL|null $host
 * @method static Builder|ZoomParticipantSQL newModelQuery()
 * @method static Builder|ZoomParticipantSQL newQuery()
 * @method static Builder|ZoomParticipantSQL query()
 * @method static Builder|ZoomParticipantSQL whereClassId($value)
 * @method static Builder|ZoomParticipantSQL whereCreatedAt($value)
 * @method static Builder|ZoomParticipantSQL whereId($value)
 * @method static Builder|ZoomParticipantSQL whereStudentAttendance($value)
 * @method static Builder|ZoomParticipantSQL whereTypeGuest($value)
 * @method static Builder|ZoomParticipantSQL whereUpdatedAt($value)
 * @method static Builder|ZoomParticipantSQL whereUserJoinMeeting($value)
 * @method static Builder|ZoomParticipantSQL whereUserUuid($value)
 * @method static Builder|ZoomParticipantSQL whereZoomMeetingId($value)
 * @mixin Eloquent
 */
class ZoomParticipantSQL extends Model implements ZoomParticipant
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            'zoom_meeting_id',
            'user_id',
            'user_join_meeting',
            'student_attendance',
            'type_guest',
            'class_id'
        ];

    protected $connection = DbConnectionConstant::SQL;

    public function user(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return (new MongoModel())->hasOne(UserNoSQL::class, 'uuid', 'user_uuid');
    }

    public function host(): HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return $this->hasOne(ZoomHostSQL::class, 'uuid', 'user_uuid');
    }

    public function classes(): HasOne
    {
        return $this->hasOne(ClassSQL::class, 'id', 'class_id');
    }
}
