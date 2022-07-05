<?php

namespace YaangVu\SisModel\App\Models\impl;

use App\Models\Category;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Comment;

/**
 * Class TaskCommentSQl
 * @author  haidn <haidn@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $name
 * @property string      $avatar
 * @property string      $content
 * @property int         $sub_task_id
 * @package YaangVu\SisModel\App\Models\impl
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
