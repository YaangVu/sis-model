<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MainTask;
use YaangVu\SisModel\App\Models\MongoModel;

/**
 * Class MainTaskSQL
 *
 * @author haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $project_name
 * @property int         $owner_id
 * @property string|null $short_description
 * @property int|null $created_by
 * @property int|null $owner_id_no_sql
 * @property int|null $type
 * @property int|null $task_status_id
 * @package YaangVu\SisModel\App\Models\impl
 * @category 
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $school_id
 * @property-read \YaangVu\SisModel\App\Models\impl\UserSQL|null $ownerMainTaskSql
 * @property-read \YaangVu\SisModel\App\Models\impl\UserNoSQL|null $ownerMainTasks
 * @property-read \Illuminate\Database\Eloquent\Collection|\YaangVu\SisModel\App\Models\impl\SubTaskSQL[] $subtasks
 * @property-read int|null $subtasks_count
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereOwnerIdNoSql($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereTaskStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainTaskSQL whereUpdatedAt($value)
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
