<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SubTask;

/**
 * Class SubTaskSQL
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $task_name
 * @property string      $type
 * @property string      $deadline
 * @property int         $assignee_id
 * @property int|null    $reviewer_id
 * @property string|null $description
 * @property int         $main_task_id
 * @property int         $task_status_id
 * @property int|null    $created_by
 * @property int|null    $owner_id
 * @property int|null    $owner_id_no_sql
 * @property int|null    $reviewer_id_no_sql
 * @property int|null    $assignee_id_no_sql
 * @property int|null    $file
 * @package YaangVu\SisModel\App\Models\impl
 */
class SubTaskSQL extends Model implements SubTask
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = [
            'task_name', 'type', 'deadline', 'assignee_id', 'reviewer_id',
            'description', 'main_task_id', 'task_status_id', 'created_by',
            'owner_id', 'owner_id_no_sql', 'assignee_id_no_sql', 'reviewer_id_no_sql', 'file'
        ];

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
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function subTaskStatus(): BelongsTo
    {
        return $this->belongsto(TaskStatusSQL::class, 'task_status_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function ownerSubTasks(): BelongsTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'owner_id_no_sql', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function reviewerSubTasks(): BelongsTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'reviewer_id_no_sql', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 30, 2022
     *
     * @return BelongsTo
     */
    public function assigneeSubTasks(): BelongsTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'assignee_id_no_sql', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return BelongsTo
     */
    public function ownerSubTaskSql(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'owner_id', 'id');
    }
}
