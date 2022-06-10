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
use YaangVu\SisModel\App\Models\RoomSetting;


/**
 * YaangVu\SisModel\App\Models\RoomSettingSQL
 *
 * @property int         $id
 * @property string|null $email
 * @property string|null $password
 * @method static Builder|RoomSettingSQL whereEmail($value)
 */
class RoomSettingSQL extends Model implements RoomSetting
{
    use HasFactory;

    protected $fillable
        = [
            'account',
            'password',
            'priority',
            'sc_id'
        ];

    public $casts
        = [
            'password' => 'encrypted',
        ];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}