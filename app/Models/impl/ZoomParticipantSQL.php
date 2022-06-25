<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\ZoomParticipant;

/**
 * YaangVu\SisModel\App\Models\ScoreSQL
 *
 * @property int         $id
 * @property int         $zoom_meeting_id
 * @property int         $user_id
 * @property int         $class_id
 * @property string      $user_join_meeting
 * @property string      $type_guest
 * @property boolean     $student_attendance
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ZoomParticipantSQL newQuery()
 * @method static Builder|ZoomParticipantSQL query()
 * @method static Builder|ZoomParticipantSQL whereCreatedAt($value)
 * @method static Builder|ZoomParticipantSQL whereCreatedBy($value)
 * @method static Builder|ZoomParticipantSQL whereDeletedAt($value)
 * @method static Builder|ZoomParticipantSQL whereId($value)
 * @method static Builder|ZoomParticipantSQL whereUpdatedAt($value)
 * @method static Builder|ZoomParticipantSQL whereClassId($value)
 * @method static Builder|ZoomParticipantSQL whereUserId($value)
 * @method static Builder|ZoomParticipantSQL whereStudentAttendance($value)
 * @method static Builder|ZoomParticipantSQL whereUserJoinMeeting($value)
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

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne|\Jenssegers\Mongodb\Relations\HasOne
    {
        return (new MongoModel())->hasOne(UserNoSQL::class, 'uuid', 'user_uuid');
    }

    public function classes(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ClassSQL::class, 'id', 'class_id');
    }
}
