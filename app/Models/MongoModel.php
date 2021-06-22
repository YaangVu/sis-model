<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\MongoModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MongoModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MongoModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MongoModel query()
 * @mixin Eloquent
 */
class MongoModel extends Model
{
    protected $connection = DbConnectionConstant::NOSQL;
}
