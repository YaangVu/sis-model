<?php
/**
 * @Author Dung
 * @Date   Mar 18, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\CommunicationLog;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\impl\UserSQL;
/**
 * Class CommunicationLogNoSql
 *
 * @author  hoangky <hoangky@toprate.io>
 * @package YaangVu\SisModel\App\Models\impl
 * @property int         $id
 * @property string|null $method
 * @property string|null $concern
 * @property string      $communication_detail
 * @property string      $response_from_parent
 * @property Carbon|null $dateOfContact
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CommunicationLogNoSql newModelQuery()
 * @method static Builder|CommunicationLogNoSql newQuery()
 * @method static Builder|CommunicationLogNoSql query()
 * @method Static Builder|CommunicationLogNoSql whereMethod($value)
 * @method Static Builder|CommunicationLogNoSql whereConcern($value)
 * @method Static Builder|CommunicationLogNoSql whereCommunicationDetail($value)
 * @method Static Builder|CommunicationLogNoSql whereResponseFromParent($value)
 * @method static Builder|CommunicationLogNoSql whereCreatedAt($value)
 * @method static Builder|CommunicationLogNoSql whereCreatedBy($value)
 * @method static Builder|CommunicationLogNoSql whereDeletedAt($value)
 * @method static Builder|CommunicationLogNoSql withTrashed()
 * @method static Builder|CommunicationLogNoSql withoutTrashed()
 * @mixin Eloquent
 */
class CommunicationLogNoSql extends MongoModel implements CommunicationLog
{
    use SoftDeletes, HasFactory;


    protected $fillable = ['*'];

    protected $table = self::table;

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;


    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'created_by', 'id');
    }

}