<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\SQLModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SQLModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SQLModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SQLModel query()
 * @mixin \Eloquent
 */
class SQLModel extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = [];

    protected $guarded = [];
}