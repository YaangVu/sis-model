<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\Database\Factories\ProgramFactory;

/**
 * YaangVu\SisModel\App\Models\Program
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property int|null    $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Program newModelQuery()
 * @method static Builder|Program newQuery()
 * @method static Builder|Program query()
 * @method static Builder|Program whereCreatedAt($value)
 * @method static Builder|Program whereCreatedBy($value)
 * @method static Builder|Program whereDeletedAt($value)
 * @method static Builder|Program whereDescription($value)
 * @method static Builder|Program whereId($value)
 * @method static Builder|Program whereName($value)
 * @method static Builder|Program whereSchoolId($value)
 * @method static Builder|Program whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static ProgramFactory factory(...$parameters)
 * @method static Builder|Program onlyTrashed()
 * @method static Builder|Program withTrashed()
 * @method static Builder|Program withoutTrashed()
 * @property string|null $external_id
 * @method static Builder|Program whereExternalId($value)
 * @property string|null $status
 * @method static Builder|Program whereStatus($value)
 * @property int|null    $lms_id
 * @method static Builder|Program whereLmsId($value)
 * @property string|null $uuid
 * @method static Builder|Program whereUuid($value)
 */
class Program extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'description', 'school_id', 'status', 'lms_id', CodeConstant::UUID];

    protected $connection = DbConnectionConstant::SQL;
}
