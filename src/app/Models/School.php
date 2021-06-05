<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\SchoolFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;

/**
 * App\Models\School
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $year_founded Năm thành lập
 * @property string|null $sc_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @method static SchoolFactory factory(...$parameters)
 * @method static Builder|School newModelQuery()
 * @method static Builder|School newQuery()
 * @method static Builder|School query()
 * @method static Builder|School whereCreatedAt($value)
 * @method static Builder|School whereCreatedBy($value)
 * @method static Builder|School whereId($value)
 * @method static Builder|School whereName($value)
 * @method static Builder|School whereScId($value)
 * @method static Builder|School whereUpdatedAt($value)
 * @method static Builder|School whereYearFounded($value)
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
