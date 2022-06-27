<?php

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\impl\ZoomHostSQL;

/**
 * @Author im.phien
 * @Date   Jun 27, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\AttendanceLog;

/**
 * YaangVu\SisModel\App\Models\AttendanceLogSQL
 *
 * @property int         $id
 * @property string|null $email
 * @property string|null $participant_display_name
 * @property Carbon|null $join_time
 * @property Carbon|null $leave_time
 * @property string|null $status
 * @property int|null    $created_by
 * @property int         $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|AttendanceLogSQL newQuery()
 * @method static Builder|AttendanceLogSQL query()
 * @method static Builder|AttendanceLogSQL whereCreatedAt($value)
 * @method static Builder|AttendanceLogSQL whereParticipantDisplayName($value)
 * @method static Builder|AttendanceLogSQL whereJoinTime($value)
 * @method static Builder|AttendanceLogSQL whereLeaveTime($value)
 * @method static Builder|AttendanceLogSQL whereStatus($value)
 * @method static Builder|AttendanceLogSQL whereUserId($value)
 * @method static Builder|AttendanceLogSQL whereEmail($value)
 * @method static Builder|AttendanceLogSQL whereCreatedBy($value)
 * @method static Builder|AttendanceLogSQL whereDeletedAt($value)
 * @method static Builder|AttendanceLogSQL whereId($value)
 * @method static Builder|AttendanceLogSQL whereUpdatedAt($value)
 */
class AttendanceLogSQL extends Model implements AttendanceLog
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['email', 'participant_display_name', 'join_time', 'leave_time', 'status', 'user_id', 'created_by'];

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
        return $this->hasOne(UserSQL::class, 'id', 'user_id');
    }
}