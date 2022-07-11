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
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $id
 * @property string $provider
 * @property string $account_sid
 * @property string $token
 * @property int    $phone_number
 * @property int    $created_by
 * @package YaangVu\SisModel\App\Models\impl
 */
class SmsSettingSQL extends Model implements SmsSetting
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['provider', 'external_id', 'token', 'phone_number', 'created_by'];
}