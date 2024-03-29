<?php
/**
 * @Author im.phien
 * @Date   Jun 17, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\ZoomHost;

/**
 * YaangVu\SisModel\App\Models\impl\ZoomHostSQL
 *
 * @property int                      $id
 * @property string                   $host_id
 * @property string|null              $uuid
 * @property string                   $first_name
 * @property string                   $last_name
 * @property string                   $full_name
 * @property string                   $email
 * @property string                   $pmi
 * @property int                      $created_by
 * @property Carbon|null              $created_at
 * @property Carbon|null              $updated_at
 * @property int|null                 $zoom_setting_id
 * @property-read ZoomSettingSQL|null $zoomSetting
 * @method static Builder|ZoomHostSQL newModelQuery()
 * @method static Builder|ZoomHostSQL newQuery()
 * @method static Builder|ZoomHostSQL query()
 * @method static Builder|ZoomHostSQL whereCreatedAt($value)
 * @method static Builder|ZoomHostSQL whereCreatedBy($value)
 * @method static Builder|ZoomHostSQL whereEmail($value)
 * @method static Builder|ZoomHostSQL whereFirstName($value)
 * @method static Builder|ZoomHostSQL whereFullName($value)
 * @method static Builder|ZoomHostSQL whereHostId($value)
 * @method static Builder|ZoomHostSQL whereId($value)
 * @method static Builder|ZoomHostSQL whereLastName($value)
 * @method static Builder|ZoomHostSQL wherePmi($value)
 * @method static Builder|ZoomHostSQL whereUpdatedAt($value)
 * @method static Builder|ZoomHostSQL whereUuid($value)
 * @method static Builder|ZoomHostSQL whereZoomSettingId($value)
 * @mixin Eloquent
 */
class ZoomHostSQL extends Model implements ZoomHost
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable = ['uuid', 'host_id', 'first_name', 'last_name', 'full_name', 'email', 'pmi', 'created_by', 'zoom_setting_id'];

    public function zoomSetting(): HasOne
    {
        return $this->hasOne(ZoomSettingSQL::class, 'id', 'zoom_setting_id');
    }
}