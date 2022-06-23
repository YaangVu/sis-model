<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MainTask;

/**
 * Class MainTaskSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $project_name
 * @property int         $owner_id
 * @property string|null $short_description
 * @package YaangVu\SisModel\App\Models\impl
 * @category
 */
class MainTaskSQL extends Model implements MainTask
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['project_name', 'owner_id', 'short_description', 'created_by'];
}
