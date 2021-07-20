<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;


/**
 * YaangVu\SisModel\App\Models\MongoModelNoSQL
 *
 * @method static Builder|MongoModelNoSQL newModelQuery()
 * @method static Builder|MongoModelNoSQL newQuery()
 * @method static Builder|MongoModelNoSQL query()
 * @mixin Eloquent
 */
class MongoModelNoSQL extends Model
{
    use SoftDeletes;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = [];

    protected $guarded = [];
}
