<?php
/**
 * @Author Admin
 * @Date   Jul 11, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SmsParticipant;

/**
 * Class SmsSettingSQL
 *
 * @author haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $template_id
 * @property string $user_uuid
 * @property string $status
 * @property string $phone_number
 * @property string $provider_id
 * @property int    $created_by
 * @property string $user_id
 * @property string $sent_date_time
 * @property int    $sms_id
 * @property int    $external_id
 * @property string $hash_code
 * @package YaangVu\SisModel\App\Models\impl
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $school_id
 * @property-read \YaangVu\SisModel\App\Models\impl\SmsSQL|null $sms
 * @property-read \YaangVu\SisModel\App\Models\impl\TemplateNoSQL|null $templateSms
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereHashCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereSentDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereSmsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsParticipantSQL whereUserUuid($value)
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