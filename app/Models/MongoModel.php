<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;


/**
 * YaangVu\SisModel\App\Models\MongoModel
 *
 * @method static Builder|MongoModel newModelQuery()
 * @method static Builder|MongoModel newQuery()
 * @method static Builder|MongoModel query()
 * @mixin Eloquent
 */
class MongoModel extends Model
{
    use SoftDeletes;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = [];

    protected $guarded = [];
}
