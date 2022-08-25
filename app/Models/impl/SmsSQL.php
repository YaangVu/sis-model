<?php
/**
 * @Author Admin
 * @Date   Jul 12, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Sms;

/**
 * Class SmsSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $id
 * @property string $template_id
 * @property string $count_user
 * @property int    $created_by
 * @property int    $title
 * @property int    $content
 * @package YaangVu\SisModel\App\Models\impl
 */
class SmsSQL extends Model implements Sms
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['template_id', 'count_user', 'created_by', 'title', 'content', 'school_id'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return HasMany
     */
    public function smsParticipants(): HasMany
    {
        return $this->hasMany(SmsParticipantSQL::class, 'sms_id', 'id');
    }
}