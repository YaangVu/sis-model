<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\TaskStatus;

/**
 * YaangVu\SisModel\App\Models\impl\TaskStatusSQL
 *
 * @property int         $id
 * @property string|null $name
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TaskStatusSQL newModelQuery()
 * @method static Builder|TaskStatusSQL newQuery()
 * @method static Builder|TaskStatusSQL query()
 * @method static Builder|TaskStatusSQL whereCreatedAt($value)
 * @method static Builder|TaskStatusSQL whereCreatedBy($value)
 * @method static Builder|TaskStatusSQL whereId($value)
 * @method static Builder|TaskStatusSQL whereName($value)
 * @method static Builder|TaskStatusSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TaskStatusSQL extends Model implements TaskStatus
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'created_by'];
}
