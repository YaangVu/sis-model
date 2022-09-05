<?php
/**
 * @Author im.phien
 * @Date   Sep 05, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SchoolSubjectType;

/**
 * YaangVu\SisModel\App\Models\SchoolSubjectTypeSQL
 *
 * @property int         $school_id
 * @property int         $subject_type_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|SchoolSubjectTypeSQL newQuery()
 * @method static Builder|SchoolSubjectTypeSQL query()
 * @method static Builder|SchoolSubjectTypeSQL whereCreatedAt($value)
 * @method static Builder|SchoolSubjectTypeSQL whereSchoolId($value)
 * @method static Builder|SchoolSubjectTypeSQL whereSubjectTypeId($value)
 * @method static Builder|SchoolSubjectTypeSQL whereCreatedBy($value)
 * @method static Builder|SchoolSubjectTypeSQL whereDeletedAt($value)
 * @method static Builder|SchoolSubjectTypeSQL whereUpdatedAt($value)
 */
class SchoolSubjectTypeSQL extends Model implements SchoolSubjectType
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

    protected $fillable = ['school_id', 'subject_type_id'];
}