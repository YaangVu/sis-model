<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Grade
 *
 * @property int         $id
 * @property string      $name
 * @property int         $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|Grade newModelQuery()
 * @method static Builder|Grade newQuery()
 * @method static Builder|Grade onlyTrashed()
 * @method static Builder|Grade query()
 * @method static Builder|Grade whereCreatedAt($value)
 * @method static Builder|Grade whereCreatedBy($value)
 * @method static Builder|Grade whereDeletedAt($value)
 * @method static Builder|Grade whereId($value)
 * @method static Builder|Grade whereName($value)
 * @method static Builder|Grade whereSchoolId($value)
 * @method static Builder|Grade whereUpdatedAt($value)
 * @method static Builder|Grade withTrashed()
 * @method static Builder|Grade withoutTrashed()
 * @mixin Eloquent
 */
class Grade extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = DbConnectionConstant::SQL;
}
