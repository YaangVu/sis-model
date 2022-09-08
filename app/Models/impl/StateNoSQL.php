<?php
/**
 * @Author Admin
 * @Date   Aug 01, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\State;

/**
 * Created by PhpStorm.
 * User: haidn@toprate.io
 * Date: 1/08/2022
 * Time: 16:22 Pm
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $name
 * @property string|null $code
 */
class StateNoSQL extends Model implements State
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function countries(): BelongsTo
    {
        return $this->belongsTo(CountryNoSQL::class, 'country_code', 'two_code');
    }
}