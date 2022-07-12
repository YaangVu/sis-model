<?php
/**
 * @Author Admin
 * @Date   Jul 12, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SmsTemplate;

/**
 * Class SmsTemplateSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $id
 * @property string $template_id
 * @property string $count_user
 * @property int    $created_by
 * @package YaangVu\SisModel\App\Models\impl
 */
class SmsTemplateSQL extends Model implements SmsTemplate
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['template_id', 'count_user', 'created_by'];
}