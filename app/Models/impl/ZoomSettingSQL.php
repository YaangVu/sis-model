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