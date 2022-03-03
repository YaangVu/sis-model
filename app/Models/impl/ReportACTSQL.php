<?php
/**
 * @Author Dung
 * @Date   Mar 03, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ReportACT;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\Database\Factories\ACTFactory;

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
 * @method static \YaangVu\SisModel\Database\Factories\ACTFactory factory(...$parameters)
 */
class ReportACTSQL extends SQLModel implements ReportACT
{
    use HasFactory;


    protected $fillable = ['student_code', 'test_date', 'act_composite_score', 'act_math_score', 'act_science_score', 'act_english_score', 'act_reading_score'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    public static function newFactory(): ACTFactory
    {
        return new ACTFactory();
    }
}