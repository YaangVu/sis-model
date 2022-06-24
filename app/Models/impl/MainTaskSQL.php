<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MainTask;
use YaangVu\SisModel\App\Models\MongoModel;

/**
 * Class MainTaskSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $project_name
 * @property int         $owner_id
 * @property string|null $short_description
 * @property int|null $created_by
 * @property int|null $owner_id_no_sql
 * @property int|null $type
 * @package YaangVu\SisModel\App\Models\impl
 * @category
 */
class MainTaskSQL extends Model implements MainTask
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['project_name', 'owner_id', 'short_description', 'created_by', 'owner_id_no_sql', 'type'];

    public function ownerMainTasks(): BelongsTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'owner_id_no_sql', '_id');
    }
}
