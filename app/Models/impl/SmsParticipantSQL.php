<?php
/**
 * @Author Admin
 * @Date   Jul 11, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SmsParticipant;

/**
 * YaangVu\SisModel\App\Models\impl\SmsParticipantSQL
 *
 * @property int                     $id
 * @property string|null             $user_uuid
 * @property string|null             $user_id
 * @property string|null             $phone_number
 * @property string|null             $status
 * @property string|null             $template_id
 * @property string|null             $external_id
 * @property string|null             $created_by
 * @property int|null                $provider_id
 * @property Carbon|null             $created_at
 * @property Carbon|null             $updated_at
 * @property string|null             $sent_date_time
 * @property int|null                $sms_id
 * @property string|null             $hash_code
 * @property string|null             $school_id
 * @property-read SmsSQL|null        $sms
 * @property-read TemplateNoSQL|null $templateSms
 * @method static Builder|SmsParticipantSQL newModelQuery()
 * @method static Builder|SmsParticipantSQL newQuery()
 * @method static Builder|SmsParticipantSQL query()
 * @method static Builder|SmsParticipantSQL whereCreatedAt($value)
 * @method static Builder|SmsParticipantSQL whereCreatedBy($value)
 * @method static Builder|SmsParticipantSQL whereExternalId($value)
 * @method static Builder|SmsParticipantSQL whereHashCode($value)
 * @method static Builder|SmsParticipantSQL whereId($value)
 * @method static Builder|SmsParticipantSQL wherePhoneNumber($value)
 * @method static Builder|SmsParticipantSQL whereProviderId($value)
 * @method static Builder|SmsParticipantSQL whereSchoolId($value)
 * @method static Builder|SmsParticipantSQL whereSentDateTime($value)
 * @method static Builder|SmsParticipantSQL whereSmsId($value)
 * @method static Builder|SmsParticipantSQL whereStatus($value)
 * @method static Builder|SmsParticipantSQL whereTemplateId($value)
 * @method static Builder|SmsParticipantSQL whereUpdatedAt($value)
 * @method static Builder|SmsParticipantSQL whereUserId($value)
 * @method static Builder|SmsParticipantSQL whereUserUuid($value)
 * @mixin Eloquent
 */
class SmsParticipantSQL extends Model implements SmsParticipant
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = ['template_id', 'user_uuid', 'phone_number', 'status', 'external_id',
           'provider_id', 'created_by', 'user_id', 'sent_date_time', 'sms_id', 'hash_code', 'school_id'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function templateSms(): BelongsTo
    {
        return (new MongoModel())->belongsTo(TemplateNoSQL::class, 'template_id', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function sms(): BelongsTo
    {
        return $this->belongsTo(SmsSQL::class, 'sms_id', 'id');
    }
}