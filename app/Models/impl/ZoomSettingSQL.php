<?php
/**
 * @Author apple
 * @Date   Jun 09, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ZoomSetting;


/**
 * YaangVu\SisModel\App\Models\ZoomSettingSQL
 *
 * @property int         $id
 * @property string|null $email
 * @property string|null $password
 * @method static Builder|ZoomSettingSQL whereEmail($value)
 * @property string $account
 * @property int $priority
 * @property string $sc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $token
 * @method static Builder|ZoomSettingSQL newModelQuery()
 * @method static Builder|ZoomSettingSQL newQuery()
 * @method static Builder|ZoomSettingSQL query()
 * @method static Builder|ZoomSettingSQL whereAccount($value)
 * @method static Builder|ZoomSettingSQL whereCreatedAt($value)
 * @method static Builder|ZoomSettingSQL whereId($value)
 * @method static Builder|ZoomSettingSQL wherePriority($value)
 * @method static Builder|ZoomSettingSQL whereScId($value)
 * @method static Builder|ZoomSettingSQL whereToken($value)
 * @method static Builder|ZoomSettingSQL whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ZoomSettingSQL extends Model implements ZoomSetting
{
    use HasFactory;

    protected $fillable
        = [
            'account',
            'token',
            'priority',
            'sc_id'
        ];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}