<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\TaskStatus;

/**
 * Class TaskStatusSQL
 *
 * @author haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $name
 * @package YaangVu\SisModel\App\Models\impl
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskStatusSQL whereUpdatedAt($value)
 */
class TaskStatusSQL extends Model implements TaskStatus
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'created_by'];
}
