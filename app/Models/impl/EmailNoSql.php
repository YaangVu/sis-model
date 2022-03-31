<?php
/**
 * @Author Dung
 * @Date   Mar 31, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Email;
use YaangVu\SisModel\App\Models\MongoModel;

/**
 * Class EmailNoSql
 *
 * @author  hoangky <hoangky@toprate.io>
 * @package YaangVu\SisModel\App\Models\impl
 * @category
 * @property int         $id
 * @property string      $user_id_from
 * @property string      $user_id_to
 * @property string      $title
 * @property string      $contents
 * @property Carbon      $time_created
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CommunicationLogNoSql newModelQuery()
 * @method static Builder|CommunicationLogNoSql newQuery()
 * @method static Builder|CommunicationLogNoSql query()
 * @method static Builder|CommunicationLogNoSql whereUserIdFrom($value)
 * @method static Builder|CommunicationLogNoSql whereUserIdTo($value)
 * @method static Builder|CommunicationLogNoSql whereTitle($value)
 * @method static Builder|CommunicationLogNoSql whereCreatedAt($value)
 * @method static Builder|CommunicationLogNoSql whereContents($value)
 * @method static Builder|CommunicationLogNoSql withTrashed($value)
 * @method static Builder|CommunicationLogNoSql withoutTrashed($value)
 * @mixin Eloquent
 */
class EmailNoSql extends MongoModel implements Email
{
    use HasFactory;

    protected $fillable = ['*'];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'user_id_to', '_id');

    }
}