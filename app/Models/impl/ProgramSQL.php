<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Program;

/**
 * YaangVu\SisModel\App\Models\ProgramSQL
 *
 * @property int
 *           $id
 * @property string
 *           $name
 * @property string|null
 *           $description
 * @property int|null
 *           $school_id
 * @property int|null
 *           $created_by
 * @property Carbon|null
 *           $created_at
 * @property Carbon|null
 *           $updated_at
 * @property string|null
 *           $deleted_at
 * @method static Builder|ProgramSQL newModelQuery()
 * @method static Builder|ProgramSQL newQuery()
 * @method static Builder|ProgramSQL query()
 * @method static Builder|ProgramSQL whereCreatedAt($value)
 * @method static Builder|ProgramSQL whereCreatedBy($value)
 * @method static Builder|ProgramSQL whereDeletedAt($value)
 * @method static Builder|ProgramSQL whereDescription($value)
 * @method static Builder|ProgramSQL whereId($value)
 * @method static Builder|ProgramSQL whereName($value)
 * @method static Builder|ProgramSQL whereSchoolId($value)
 * @method static Builder|ProgramSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|ProgramSQL onlyTrashed()
 * @method static Builder|ProgramSQL withTrashed()
 * @method static Builder|ProgramSQL withoutTrashed()
 * @property string|null
 *           $external_id
 * @method static Builder|ProgramSQL whereExternalId($value)
 * @property string|null
 *           $status
 * @method static Builder|ProgramSQL whereStatus($value)
 * @property int|null
 *           $lms_id
 * @method static Builder|ProgramSQL whereLmsId($value)
 * @property string|null
 *           $uuid
 * @method static Builder|ProgramSQL whereUuid($value)
 * @property-read Collection|GraduationCategorySQL[]
 *                $graduationCategories
 * @property-read int|null
 *                $graduation_categories_count
 */
class ProgramSQL extends Model implements Program
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $fillable = ['name', 'description', 'school_id', 'status', 'lms_id', CodeConstant::UUID];

    protected $connection = DbConnectionConstant::SQL;

    public function graduationCategories(): BelongsToMany
    {
        return $this->belongsToMany(GraduationCategorySQL::class, (new ProgramGraduationCategorySQL())->getTable(),
                                    'program_id', 'graduation_category_id')
                    ->addSelect('graduation_categories.*', 'program_graduation_category.credit');
    }
}
