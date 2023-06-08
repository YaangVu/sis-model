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
 *
 * @author haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int    $id
 * @property string $template_id
 * @property string $count_user
 * @property int    $created_by
 * @property int    $title
 * @property int    $content
 * @package YaangVu\SisModel\App\Models\impl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $school_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\YaangVu\SisModel\App\Models\impl\SmsParticipantSQL[] $smsParticipants
 * @property-read int|null $sms_participants_count
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereCountUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmsSQL whereUpdatedAt($value)
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