<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Lms;
use YaangVu\SisModel\Database\Factories\LmsFactory;

/**
 * YaangVu\SisModel\App\Models\LmsSQL
 *
 * @property int         $id
 * @property string      $name
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|LmsSQL newModelQuery()
 * @method static Builder|LmsSQL newQuery()
 * @method static Builder|LmsSQL query()
 * @method static Builder|LmsSQL whereCreatedAt($value)
 * @method static Builder|LmsSQL whereCreatedBy($value)
 * @method static Builder|LmsSQL whereDeletedAt($value)
 * @method static Builder|LmsSQL whereId($value)
 * @method static Builder|LmsSQL whereName($value)
 * @method static Builder|LmsSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static LmsFactory factory(...$parameters)
 * @method static Builder|LmsSQL onlyTrashed()
 * @method static Builder|LmsSQL withTrashed()
 * @method static Builder|LmsSQL withoutTrashed()
 * @property string|null $description
 * @method static Builder|LmsSQL whereDescription($value)
 * @property string|null $lid
 * @method static Builder|LmsSQL whereLid($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|LmsSQL whereExternalId($value)
 * @method static Builder|LmsSQL whereUuid($value)
 */
class LmsSQL extends Model implements Lms
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable = ['name', CodeConstant::UUID];
}
