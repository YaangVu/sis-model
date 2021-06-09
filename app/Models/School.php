<?php

namespace YaangVu\SisModel\App\Models;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\SisModel\Database\Factories\SchoolFactory;

/**
 * YaangVu\SisModel\App\Models\School
 *
 * @property int $id
 * @property string $name
 * @property string|null $year_founded Năm thành lập
 * @property string|null $sc_id
 * @property string|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|School newModelQuery()
 * @method static Builder|School newQuery()
 * @method static \Illuminate\Database\Query\Builder|School onlyTrashed()
 * @method static Builder|School query()
 * @method static Builder|School whereCreatedAt($value)
 * @method static Builder|School whereCreatedBy($value)
 * @method static Builder|School whereDeletedAt($value)
 * @method static Builder|School whereId($value)
 * @method static Builder|School whereName($value)
 * @method static Builder|School whereScId($value)
 * @method static Builder|School whereUpdatedAt($value)
 * @method static Builder|School whereYearFounded($value)
 * @method static Builder|School withTrashed()
 * @method static Builder|School withoutTrashed()
 * @mixin Eloquent
 */
class School extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'year_founded', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public $code = CodeConstant::SC_ID;
}
