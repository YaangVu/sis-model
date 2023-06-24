<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\SubTask;

/**
 * YaangVu\SisModel\App\Models\impl\SubTaskSQL
 *
 * @property int                                                   $id
 * @property string                                                $task_name
 * @property string|null                                           $type
 * @property string                                                $deadline
 * @property string|null                                           $file
 * @property int|null                                              $assignee_id
 * @property int|null                                              $reviewer_id
 * @property int|null                                              $created_by
 * @property string|null                                           $description
 * @property int|null                                            $owner_id
 * @property string|null         $owner_id_no_sql
 * @property string|null         $assignee_id_no_sql
 * @property string|null         $reviewer_id_no_sql
 * @property int                 $main_task_id
 * @property int                 $task_status_id
 * @property Carbon|null         $created_at
 * @property Carbon|null         $updated_at
 * @property string|null         $school_id
 * @property string|null         $download_file
 * @property-read UserNoSQL|null $assigneeSubTasks
 * @property-read MainTaskSQL    $mainTasks
 * @property-read UserSQL|null   $ownerSubTaskSql
 * @property-read UserNoSQL|null $ownerSubTasks
 * @property-read UserNoSQL|null $reviewerSubTasks
 * @property-read TaskStatusSQL  $subTaskStatus
 * @method static Builder|SubTaskSQL newModelQuery()
 * @method static Builder|SubTaskSQL newQuery()
 * @method static Builder|SubTaskSQL query()
 * @method static Builder|SubTaskSQL whereAssigneeId($value)
 * @method static Builder|SubTaskSQL whereAssigneeIdNoSql($value)
 * @method static Builder|SubTaskSQL whereCreatedAt($value)
 * @method static Builder|SubTaskSQL whereCreatedBy($value)
 * @method static Builder|SubTaskSQL whereDeadline($value)
 * @method static Builder|SubTaskSQL whereDescription($value)
 * @method static Builder|SubTaskSQL whereDownloadFile($value)
 * @method static Builder|SubTaskSQL whereFile($value)
 * @method static Builder|SubTaskSQL whereId($value)
 * @method static Builder|SubTaskSQL whereMainTaskId($value)
 * @method static Builder|SubTaskSQL whereOwnerId($value)
 * @method static Builder|SubTaskSQL whereOwnerIdNoSql($value)
 * @method static Builder|SubTaskSQL whereReviewerId($value)
 * @method static Builder|SubTaskSQL whereReviewerIdNoSql($value)
 * @method static Builder|SubTaskSQL whereSchoolId($value)
 * @method static Builder|SubTaskSQL whereTaskName($value)
 * @method static Builder|SubTaskSQL whereTaskStatusId($value)
 * @method static Builder|SubTaskSQL whereType($value)
 * @method static Builder|SubTaskSQL whereUpdatedAt($value)
 * @mixin Eloquent
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
            'owner_id', 'owner_id_no_sql', 'assignee_id_no_sql', 'reviewer_id_no_sql', 'file', 'school_id',
            'download_file'
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
