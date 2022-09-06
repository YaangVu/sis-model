<?php
/**
 * @Author im.phien
 * @Date   Sep 06, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SubjectType;

/**
 * YaangVu\SisModel\App\Models\SubjectTypeSQL
 *
 * @property int         $id
 * @property string      $name
 * @property int         $school_id
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|SubjectTypeSQL newModelQuery()
 * @method static Builder|SubjectTypeSQL newQuery()
 * @method static Builder|SubjectTypeSQL onlyTrashed()
 * @method static Builder|SubjectTypeSQL query()
 * @method static Builder|SubjectTypeSQL whereCreatedAt($value)
 * @method static Builder|SubjectTypeSQL whereCreatedBy($value)
 * @method static Builder|SubjectTypeSQL whereDeletedAt($value)
 * @method static Builder|SubjectTypeSQL whereId($value)
 * @method static Builder|SubjectTypeSQL whereName($value)
 * @method static Builder|SubjectTypeSQL whereUpdatedAt($value)
 * @method static Builder|SubjectTypeSQL whereSchoolId($value)
 * @method static Builder|SubjectTypeSQL withTrashed()
 * @method static Builder|SubjectTypeSQL withoutTrashed()
 */
class SubjectTypeSQL extends Model implements SubjectType
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $fillable = ['id','name','school_id','created_by'];

    protected $connection = DbConnectionConstant::SQL;

    public function school(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SchoolSQL::class,'school_id');
    }
}