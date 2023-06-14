<?php
/**
 * @Author Dung
 * @Date   Apr 20, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\UserParent;

/**
 * Class UserParentSQL
 *
 * @author hoangky <hoangky@toprate.io>
 * @package YaangVu\SisModel\App\Models\impl
 * @property integer      $id
 * @property string       $uuid
 * @property integer      $children_id
 * @property integer      $parent_id
 * @property integer|null $school_id
 * @property integer|null $create_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property Carbon|null  $deleted_at
 * @method static Builder|UserParentSQL newModelQuery()
 * @method static Builder|UserParentSQL newQuery()
 * @method static Builder|UserParentSQL onlyTrashed()
 * @method static Builder|UserParentSQL query()
 * @method static Builder|UserParentSQL whereCreatedAt($value)
 * @method static Builder|UserParentSQL whereCreatedBy($value)
 * @method static Builder|UserParentSQL whereDeletedAt($value)
 * @method Static Builder|UserParentSQL whereId($value)
 * @method static Builder|UserParentSQL whereChildrenId($value)
 * @method static Builder|UserParentSQL whereSchoolId($value)
 * @method static Builder|UserParentSQL whereParentId($value)
 * @method static Builder|UserParentSQL whereUuid($value)
 * @property int|null $created_by
 * @property-read \YaangVu\SisModel\App\Models\impl\UserSQL $children
 * @property-read \YaangVu\SisModel\App\Models\impl\UserSQL $parent
 * @method static \Illuminate\Database\Eloquent\Builder|UserParentSQL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserParentSQL whereUpdatedAt($value)
 * @mixin \Eloquent
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


    public function children(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'children_id', 'id');
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'parent_id', 'id');
    }
}