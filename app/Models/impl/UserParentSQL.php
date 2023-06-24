<?php
/**
 * @Author Dung
 * @Date   Apr 20, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\UserParent;

/**
 * YaangVu\SisModel\App\Models\impl\UserParentSQL
 *
 * @property int          $id
 * @property string|null  $uuid
 * @property int          $children_id
 * @property int          $school_id
 * @property int|null     $created_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property string|null  $deleted_at
 * @property int          $parent_id
 * @property-read UserSQL $children
 * @property-read UserSQL $parent
 * @method static Builder|UserParentSQL newModelQuery()
 * @method static Builder|UserParentSQL newQuery()
 * @method static Builder|UserParentSQL query()
 * @method static Builder|UserParentSQL whereChildrenId($value)
 * @method static Builder|UserParentSQL whereCreatedAt($value)
 * @method static Builder|UserParentSQL whereCreatedBy($value)
 * @method static Builder|UserParentSQL whereDeletedAt($value)
 * @method static Builder|UserParentSQL whereId($value)
 * @method static Builder|UserParentSQL whereParentId($value)
 * @method static Builder|UserParentSQL whereSchoolId($value)
 * @method static Builder|UserParentSQL whereUpdatedAt($value)
 * @method static Builder|UserParentSQL whereUuid($value)
 * @mixin Eloquent
 */
class UserParentSQL extends Model implements UserParent
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::UUID,
            'children_id',
            'parent_id',
            'school_id',
            'created_by'
        ];


    public function children(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'children_id', 'id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'parent_id', 'id');
    }
}