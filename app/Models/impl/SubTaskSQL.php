<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SubTask;

/**
 * Class SubTaskSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $task_name
 * @property string      $status
 * @property string      $deadline
 * @property int         $assignee_id
 * @property int|null    $reviewer_id
 * @property string|null $description
 * @property int         $main_task_id
 * @property int         $task_status_id
 * @package YaangVu\SisModel\App\Models\impl
 */
class SubTaskSQL extends Model implements SubTask
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['task_name', 'status', 'deadline', 'assignee_id', 'reviewer_id', 'description', 'main_task_id', 'task_status_id','created_by'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 23, 2022
     *
     * @return BelongsTo
     */
    public function mainTasks(): BelongsTo
    {
        return $this->belongsTo(MainTaskSQL::class, 'main_task_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 23, 2022
     *
     * @return BelongsTo
     */
    public function subTaskStatus(): BelongsTo
    {
        return $this->belongsTo(TaskStatusSQL::class, 'sub_task_id');
    }
}
