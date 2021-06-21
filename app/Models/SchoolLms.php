<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\SchoolLmsFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\SchoolLms
 *
 * @property int         $id
 * @property string|null $external_id
 * @property int|null    $school_id
 * @property int|null    $lms_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|SchoolLms newModelQuery()
 * @method static Builder|SchoolLms newQuery()
 * @method static Builder|SchoolLms query()
 * @method static Builder|SchoolLms whereCreatedAt($value)
 * @method static Builder|SchoolLms whereCreatedBy($value)
 * @method static Builder|SchoolLms whereDeletedAt($value)
 * @method static Builder|SchoolLms whereExternalId($value)
 * @method static Builder|SchoolLms whereId($value)
 * @method static Builder|SchoolLms whereLmsId($value)
 * @method static Builder|SchoolLms whereSchoolId($value)
 * @method static Builder|SchoolLms whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static SchoolLmsFactory factory(...$parameters)
 * @method static Builder|SchoolLms onlyTrashed()
 * @method static Builder|SchoolLms withTrashed()
 * @method static Builder|SchoolLms withoutTrashed()
 */
class SchoolLms extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'school_lms';

    protected $fillable = ['school_id', 'lms_id', CodeConstant::EX_ID];

    protected $connection = DbConnectionConstant::SQL;
}
