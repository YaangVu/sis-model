<?php
/**
 * @Author Edogawa Conan
 * @Date   May 13, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ProgressBehavior;

/**
 * Created by PhpStorm.
 * User: Edogawa Conan
 * Date: 5/13/2022
 * Time: 10:42 AM
 * @property string      $_id
 * @property string      $name
 * @property string|null $uuid
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|ProgressBehaviorNoSql whereDeletedAt($value)
 * @method static Builder|ProgressBehaviorNoSql whereCreatedAt($value)
 * @method static Builder|ProgressBehaviorNoSql whereId($value)
 * @method static Builder|ProgressBehaviorNoSql whereName($value)
 * @method static Builder|ProgressBehaviorNoSql whereUuid($value)
 * @method static Builder|ProgressBehaviorNoSql newModelQuery()
 * @method static Builder|ProgressBehaviorNoSql newQuery()
 * @method static Builder|ProgressBehaviorNoSql query()
 */
class ProgressBehaviorNoSql extends Model implements ProgressBehavior
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}