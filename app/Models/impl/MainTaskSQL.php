<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MainTask;
use YaangVu\SisModel\App\Models\MongoModel;

/**
 * YaangVu\SisModel\App\Models\impl\MainTaskSQL
 *
 * @property int                              $id
 * @property string                           $project_name
 * @property int                              $owner_id
 * @property string|null                      $type
 * @property string|null                      $owner_id_no_sql
 * @property string|null                      $short_description
 * @property int|null                         $created_by
 * @property Carbon|null                      $created_at
 * @property Carbon|null                      $updated_at
 * @property string|null                      $school_id
 * @property int|null                         $task_status_id
 * @property-read UserSQL|null                $ownerMainTaskSql
 * @property-read UserNoSQL|null              $ownerMainTasks
 * @property-read Collection<int, SubTaskSQL> $subtasks
 * @property-read int|null                    $subtasks_count
 * @method static Builder|MainTaskSQL newModelQuery()
 * @method static Builder|MainTaskSQL newQuery()
 * @method static Builder|MainTaskSQL query()
 * @method static Builder|MainTaskSQL whereCreatedAt($value)
 * @method static Builder|MainTaskSQL whereCreatedBy($value)
 * @method static Builder|MainTaskSQL whereId($value)
 * @method static Builder|MainTaskSQL whereOwnerId($value)
 * @method static Builder|MainTaskSQL whereOwnerIdNoSql($value)
 * @method static Builder|MainTaskSQL whereProjectName($value)
 * @method static Builder|MainTaskSQL whereSchoolId($value)
 * @method static Builder|MainTaskSQL whereShortDescription($value)
 * @method static Builder|MainTaskSQL whereTaskStatusId($value)
 * @method static Builder|MainTaskSQL whereType($value)
 * @method static Builder|MainTaskSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class MainTaskSQL extends Model implements MainTask
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['project_name', 'owner_id', 'short_description', 'created_by', 'owner_id_no_sql', 'type', 'school_id', 'task_status_id'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return BelongsTo
     */
    public function ownerMainTasks(): BelongsTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'owner_id_no_sql', '_id');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return BelongsTo
     */
    public function ownerMainTaskSql(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'owner_id', 'id')->with('userNoSql');
    }

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 27, 2022
     *
     * @return HasMany
     */
    public function subtasks(): HasMany
    {
        return $this->hasMany(SubTaskSQL::class, 'main_task_id', 'id');
    }
}
