<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;

/**
 * App\Models\Term
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $status
 * @property string|null $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Database\Factories\TermFactory factory(...$parameters)
 * @method static Builder|Term newModelQuery()
 * @method static Builder|Term newQuery()
 * @method static \Illuminate\Database\Query\Builder|Term onlyTrashed()
 * @method static Builder|Term query()
 * @method static Builder|Term whereCreatedAt($value)
 * @method static Builder|Term whereCreatedBy($value)
 * @method static Builder|Term whereDeletedAt($value)
 * @method static Builder|Term whereEndDate($value)
 * @method static Builder|Term whereId($value)
 * @method static Builder|Term whereName($value)
 * @method static Builder|Term whereSchoolId($value)
 * @method static Builder|Term whereStartDate($value)
 * @method static Builder|Term whereStatus($value)
 * @method static Builder|Term whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Term withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Term withoutTrashed()
 * @mixin Eloquent
 */
class Term extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date', 'status', 'school_id', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM, 'created_by'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public string $code = CodeConstant::SC_ID;

    public function classes(): HasMany
    {
        return $this->hasMany(Clazz::class, 'school_id');
    }
}
