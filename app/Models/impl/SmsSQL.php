<?php
/**
 * @Author Admin
 * @Date   Jul 12, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Sms;

/**
 * YaangVu\SisModel\App\Models\impl\SmsSQL
 *
 * @property int                                     $id
 * @property string|null                             $template_id
 * @property string|null                             $count_user
 * @property int|null                                $created_by
 * @property Carbon|null                             $created_at
 * @property Carbon|null                             $updated_at
 * @property string|null                             $title
 * @property string|null                             $school_id
 * @property string|null                             $content
 * @property-read Collection<int, SmsParticipantSQL> $smsParticipants
 * @property-read int|null                           $sms_participants_count
 * @method static Builder|SmsSQL newModelQuery()
 * @method static Builder|SmsSQL newQuery()
 * @method static Builder|SmsSQL query()
 * @method static Builder|SmsSQL whereContent($value)
 * @method static Builder|SmsSQL whereCountUser($value)
 * @method static Builder|SmsSQL whereCreatedAt($value)
 * @method static Builder|SmsSQL whereCreatedBy($value)
 * @method static Builder|SmsSQL whereId($value)
 * @method static Builder|SmsSQL whereSchoolId($value)
 * @method static Builder|SmsSQL whereTemplateId($value)
 * @method static Builder|SmsSQL whereTitle($value)
 * @method static Builder|SmsSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SmsSQL extends Model implements Sms
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['template_id', 'count_user', 'created_by', 'title', 'content', 'school_id'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return HasMany
     */
    public function smsParticipants(): HasMany
    {
        return $this->hasMany(SmsParticipantSQL::class, 'sms_id', 'id');
    }
}