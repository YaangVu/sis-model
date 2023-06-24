<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ActivityCategory;

/**
 * YaangVu\SisModel\App\Models\impl\ActivityCategorySQL
 *
 * @property int         $id
 * @property string      $name
 * @property string      $weight
 * @property string|null $description
 * @property int         $school_id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property int|null    $created_by
 * @method static Builder|ActivityCategorySQL newModelQuery()
 * @method static Builder|ActivityCategorySQL newQuery()
 * @method static Builder|ActivityCategorySQL onlyTrashed()
 * @method static Builder|ActivityCategorySQL query()
 * @method static Builder|ActivityCategorySQL whereCreatedAt($value)
 * @method static Builder|ActivityCategorySQL whereCreatedBy($value)
 * @method static Builder|ActivityCategorySQL whereDeletedAt($value)
 * @method static Builder|ActivityCategorySQL whereDescription($value)
 * @method static Builder|ActivityCategorySQL whereExternalId($value)
 * @method static Builder|ActivityCategorySQL whereId($value)
 * @method static Builder|ActivityCategorySQL whereName($value)
 * @method static Builder|ActivityCategorySQL whereSchoolId($value)
 * @method static Builder|ActivityCategorySQL whereUpdatedAt($value)
 * @method static Builder|ActivityCategorySQL whereUuid($value)
 * @method static Builder|ActivityCategorySQL whereWeight($value)
 * @method static Builder|ActivityCategorySQL withTrashed()
 * @method static Builder|ActivityCategorySQL withoutTrashed()
 * @mixin Eloquent
 */
class ActivityCategorySQL extends Model implements ActivityCategory
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'weight', 'description', 'school_id', CodeConstant::UUID, CodeConstant::EX_ID];

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}