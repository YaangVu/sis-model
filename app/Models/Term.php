<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;


/**
 * YaangVu\SisModel\App\Models\Term
 *
 * @property int                     $id
 * @property string                  $name
 * @property string|null             $start_date
 * @property string|null             $end_date
 * @property string|null             $status
 * @property int|null                $school_id
 * @property string|null             $external_id
 * @property string|null             $lms_system
 * @property int|null                $created_by
 * @property Carbon|null             $created_at
 * @property Carbon|null             $updated_at
 * @property Carbon|null             $deleted_at
 * @property-read Collection|Clazz[] $classes
 * @property-read int|null           $classes_count
 * @method static \Database\Factories\TermFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Term newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Term newQuery()
 * @method static \Illuminate\Database\Query\Builder|Term onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Term query()
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereLmsSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Term whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Term withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Term withoutTrashed()
 * @mixin \Eloquent
 */
class Term extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date', 'status', 'school_id', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM, 'created_by'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string
     */
    public string $code = CodeConstant::SC_ID;

    public function classes(): HasMany
    {
        return $this->hasMany(Clazz::class, 'school_id');
    }
}
