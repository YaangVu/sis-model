<?php

namespace YaangVu\SisModel\App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\SQLModel
 *
 * @method static Builder|SQLModel newModelQuery()
 * @method static Builder|SQLModel newQuery()
 * @method static Builder|SQLModel query()
 * @mixin Eloquent
 */
class SQLModel extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = [];

    protected $guarded = [];
}