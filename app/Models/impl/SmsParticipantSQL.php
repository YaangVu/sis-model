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
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $template_id
 * @property string $user_uuid
 * @property string $status
 * @property string $phone_number
 * @property string $provider_id
 * @property int    $created_by
 * @property string $user_id
 * @property string $sent_date_time
 * @package YaangVu\SisModel\App\Models\impl
 */
class SmsParticipantSQL extends Model implements SmsParticipant
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['template_id', 'user_uuid', 'phone_number', 'status', 'external_id', 'provider_id', 'created_by', 'user_id', 'sent_date_time'];

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
}