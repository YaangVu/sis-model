<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\LmsFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Lms
 *
 * @property int         $id
 * @property string      $name
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Lms newModelQuery()
 * @method static Builder|Lms newQuery()
 * @method static Builder|Lms query()
 * @method static Builder|Lms whereCreatedAt($value)
 * @method static Builder|Lms whereCreatedBy($value)
 * @method static Builder|Lms whereDeletedAt($value)
 * @method static Builder|Lms whereId($value)
 * @method static Builder|Lms whereName($value)
 * @method static Builder|Lms whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static LmsFactory factory(...$parameters)
 * @method static Builder|Lms onlyTrashed()
 * @method static Builder|Lms withTrashed()
 * @method static Builder|Lms withoutTrashed()
 * @property string|null $description
 * @method static Builder|Lms whereDescription($value)
 * @property string|null $lid
 * @method static Builder|Lms whereLid($value)
 */
class Lms extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', CodeConstant::LID];
}
