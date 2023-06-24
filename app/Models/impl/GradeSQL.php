<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Grade;


/**
 * YaangVu\SisModel\App\Models\impl\GradeSQL
 *
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property string      $name
 * @property int         $school_id
 * @property string|null $description
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property int|null    $index
 * @method static Builder|GradeSQL newModelQuery()
 * @method static Builder|GradeSQL newQuery()
 * @method static Builder|GradeSQL onlyTrashed()
 * @method static Builder|GradeSQL query()
 * @method static Builder|GradeSQL whereCreatedAt($value)
 * @method static Builder|GradeSQL whereCreatedBy($value)
 * @method static Builder|GradeSQL whereDeletedAt($value)
 * @method static Builder|GradeSQL whereDescription($value)
 * @method static Builder|GradeSQL whereExternalId($value)
 * @method static Builder|GradeSQL whereId($value)
 * @method static Builder|GradeSQL whereIndex($value)
 * @method static Builder|GradeSQL whereName($value)
 * @method static Builder|GradeSQL whereSchoolId($value)
 * @method static Builder|GradeSQL whereUpdatedAt($value)
 * @method static Builder|GradeSQL whereUuid($value)
 * @method static Builder|GradeSQL withTrashed()
 * @method static Builder|GradeSQL withoutTrashed()
 * @mixin Eloquent
 */
class GradeSQL extends Model implements Grade
{
    use HasFactory, SoftDeletes;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['id', 'name', 'school_id'];

}
