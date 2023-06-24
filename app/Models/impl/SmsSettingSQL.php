<?php
/**
 * @Author Admin
 * @Date   Jul 08, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SmsSetting;

/**
 * YaangVu\SisModel\App\Models\impl\SmsSettingSQL
 *
 * @property int         $id
 * @property string|null $provider
 * @property string|null $external_id
 * @property string|null $token
 * @property string|null $phone_number
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SmsSettingSQL newModelQuery()
 * @method static Builder|SmsSettingSQL newQuery()
 * @method static Builder|SmsSettingSQL query()
 * @method static Builder|SmsSettingSQL whereCreatedAt($value)
 * @method static Builder|SmsSettingSQL whereCreatedBy($value)
 * @method static Builder|SmsSettingSQL whereExternalId($value)
 * @method static Builder|SmsSettingSQL whereId($value)
 * @method static Builder|SmsSettingSQL wherePhoneNumber($value)
 * @method static Builder|SmsSettingSQL whereProvider($value)
 * @method static Builder|SmsSettingSQL whereToken($value)
 * @method static Builder|SmsSettingSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SmsSettingSQL extends Model implements SmsSetting
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['provider', 'external_id', 'token', 'phone_number', 'created_by'];
}