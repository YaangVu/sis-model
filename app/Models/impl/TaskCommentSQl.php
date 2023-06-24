<?php

namespace YaangVu\SisModel\App\Models\impl;

use App\Models\Category;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Comment;

/**
 * YaangVu\SisModel\App\Models\impl\TaskCommentSQl
 *
 * @property int                  $id
 * @property string               $name
 * @property string|null          $avatar
 * @property int|null             $created_by
 * @property string|null          $content
 * @property int|null             $sub_task_id
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @property int|null             $main_task_id
 * @property-read SubTaskSQL|null $TaskComments
 * @method static Builder|TaskCommentSQl newModelQuery()
 * @method static Builder|TaskCommentSQl newQuery()
 * @method static Builder|TaskCommentSQl query()
 * @method static Builder|TaskCommentSQl whereAvatar($value)
 * @method static Builder|TaskCommentSQl whereContent($value)
 * @method static Builder|TaskCommentSQl whereCreatedAt($value)
 * @method static Builder|TaskCommentSQl whereCreatedBy($value)
 * @method static Builder|TaskCommentSQl whereId($value)
 * @method static Builder|TaskCommentSQl whereMainTaskId($value)
 * @method static Builder|TaskCommentSQl whereName($value)
 * @method static Builder|TaskCommentSQl whereSubTaskId($value)
 * @method static Builder|TaskCommentSQl whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TaskCommentSQl extends Model implements Comment
{
    use HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', 'avatar', 'content', 'sub_task_id', 'created_by', 'main_task_id'];

    /**
     * @Description
     *
     * @Author Admin
     * @Date   Jun 23, 2022
     *
     * @return BelongsTo
     */
    public function TaskComments(): BelongsTo
    {
        return $this->belongsTo(SubTaskSQL::class, 'sub_task_id');
    }
}
