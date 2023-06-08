<?php
/**
 * @Author Admin
 * @Date   Jul 08, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SmsSetting;

/**
 * Class SmsSettingSQL
 *
 * @author haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $id
 * @property string $provider
 * @property string $account_sid
 * @property string $token
 * @property int    $phone_number
 * @property int    $created_by
 * @package YaangVu\SisModel\App\Models\impl
 * @property string|null $external_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSettingSQL whereUpdatedAt($value)
 */
class SmsSettingSQL extends Model implements SmsSetting
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['provider', 'external_id', 'token', 'phone_number', 'created_by'];
}