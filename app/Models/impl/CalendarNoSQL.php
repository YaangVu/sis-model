<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\LaravelAws\S3Service;
use YaangVu\SisModel\App\Models\Calendar;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\CalendarNoSQL
 *
 * @property int         $id
 * @property string|null $type Type of calendar: event, holiday, class schedule, activity
 * @property string|null $name event name
 * @property string|null $description
 * @property int|null    $school_id
 * @property int|null    $class_id
 * @property string|null $group
 * @property string|null $start
 * @property string|null $end
 * @property bool|null   $is_all_day
 * @property string|null $repeat
 * @property string|null $timezone
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CalendarNoSQL newModelQuery()
 * @method static Builder|CalendarNoSQL newQuery()
 * @method static Builder|CalendarNoSQL query()
 * @method static Builder|CalendarNoSQL whereClassId($value)
 * @method static Builder|CalendarNoSQL whereCreatedAt($value)
 * @method static Builder|CalendarNoSQL whereCreatedBy($value)
 * @method static Builder|CalendarNoSQL whereDeletedAt($value)
 * @method static Builder|CalendarNoSQL whereDescription($value)
 * @method static Builder|CalendarNoSQL whereEnd($value)
 * @method static Builder|CalendarNoSQL whereGroup($value)
 * @method static Builder|CalendarNoSQL whereId($value)
 * @method static Builder|CalendarNoSQL whereIsAllDay($value)
 * @method static Builder|CalendarNoSQL whereName($value)
 * @method static Builder|CalendarNoSQL whereRepeat($value)
 * @method static Builder|CalendarNoSQL whereSchoolId($value)
 * @method static Builder|CalendarNoSQL whereStart($value)
 * @method static Builder|CalendarNoSQL whereTimezone($value)
 * @method static Builder|CalendarNoSQL whereType($value)
 * @method static Builder|CalendarNoSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|CalendarNoSQL whereExternalId($value)
 * @method static Builder|CalendarNoSQL whereUuid($value)
 */
class CalendarNoSQL extends Model implements Calendar
{
    private const EXPIRATION = '+180 minutes';

    use HasFactory;

    protected $fillable = ['*'];

    protected $table = self::table;

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;

    protected S3Service $S3Service;

    public function user(): BelongsTo
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function class(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ClassSQL::class, 'class_id', 'id');
    }

    public function getStartAttribute($value): Carbon|string|null
    {
        if (gettype($value) !== 'string')
            return Carbon::createFromTimestampMsUTC($value);

        return $value;
    }

    public function getEndAttribute($value): Carbon|string|null
    {
        if (gettype($value) !== 'string')
            return Carbon::createFromTimestampMsUTC($value);

        return $value;
    }

    public function term(): BelongsTo
    {
        return (new SQLModel())->belongsTo(TermSQL::class, 'term_id', 'id');
    }

    public function zoomMeeting(): BelongsTo
    {
        return (new SQLModel())->belongsTo(ZoomMeetingSQL::class, 'zoom_meeting_id', 'id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Aug 14, 2022
     *
     * @return HasMany|\Jenssegers\Mongodb\Relations\HasMany
     */
    public function attendanceLogs(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return (new MongoModel())->hasMany(AttendanceLogSQL::class, 'calendar_id', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Aug 14, 2022
     *
     * @return HasMany|\Jenssegers\Mongodb\Relations\HasMany
     */
    public function attendances(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return (new MongoModel())->hasMany(AttendanceSQL::class, 'calendar_id', '_id');
    }

    // /**
    //  * AWS Pre Signed a url avatar
    //  *
    //  * @param string|null $value
    //  *
    //  * @return string|null
    //  */
    // public function getRecordUrlAttribute(?string $value): ?string
    // {
    //     if (isset($value) && $value) {
    //         $this->S3Service = new S3Service();
    //
    //         return $this->S3Service->createPresigned($value, self::EXPIRATION);
    //     } else {
    //         return null;
    //     }
    // }
}
