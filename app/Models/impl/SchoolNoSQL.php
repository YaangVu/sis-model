<?php

namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\School;

/**
 * YaangVu\SisModel\App\Models\SchoolSQL
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $year_founded Năm thành lập
 * @property string|null $sc_id
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|SchoolSQL newModelQuery()
 * @method static Builder|SchoolSQL newQuery()
 * @method static Builder|SchoolSQL onlyTrashed()
 * @method static Builder|SchoolSQL query()
 * @method static Builder|SchoolSQL whereCreatedAt($value)
 * @method static Builder|SchoolSQL whereCreatedBy($value)
 * @method static Builder|SchoolSQL whereDeletedAt($value)
 * @method static Builder|SchoolSQL whereId($value)
 * @method static Builder|SchoolSQL whereName($value)
 * @method static Builder|SchoolSQL whereScId($value)
 * @method static Builder|SchoolSQL whereUpdatedAt($value)
 * @method static Builder|SchoolSQL whereYearFounded($value)
 * @method static Builder|SchoolSQL withTrashed()
 * @method static Builder|SchoolSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null $description
 * @method static Builder|SchoolSQL whereDescription($value)
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
     * @var array
     */
    public string|array $code = CodeConstant::SC_ID;

    protected $connection = DbConnectionConstant::NOSQL;
}
