<?php

namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\School;

/**
 * YaangVu\SisModel\App\Models\SchoolNoSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $year_founded Năm thành lập
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property object|null $zones
 * @method static Builder|SchoolNoSQL newModelQuery()
 * @method static Builder|SchoolNoSQL newQuery()
 * @method static Builder|SchoolNoSQL onlyTrashed()
 * @method static Builder|SchoolNoSQL query()
 * @method static Builder|SchoolNoSQL whereCreatedAt($value)
 * @method static Builder|SchoolNoSQL whereCreatedBy($value)
 * @method static Builder|SchoolNoSQL whereDeletedAt($value)
 * @method static Builder|SchoolNoSQL whereId($value)
 * @method static Builder|SchoolNoSQL whereName($value)
 * @method static Builder|SchoolNoSQL whereUpdatedAt($value)
 * @method static Builder|SchoolNoSQL whereYearFounded($value)
 * @method static Builder|SchoolNoSQL withTrashed()
 * @method static Builder|SchoolNoSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null $description
 * @method static Builder|SchoolNoSQL whereDescription($value)
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|SchoolNoSQL whereExternalId($value)
 * @method static Builder|SchoolNoSQL whereUuid($value)
 */
class SchoolNoSQL extends Model implements School
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string
     */
    public string $code = CodeConstant::UUID;

    protected $connection = DbConnectionConstant::NOSQL;
}
