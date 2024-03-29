<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ProgramGraduationCategory;

/**
 * YaangVu\SisModel\App\Models\impl\ProgramGraduationCategorySQL
 *
 * @property int                                         $id
 * @property string|null                                 $uuid
 * @property string|null                                 $external_id
 * @property int|null                                    $program_id
 * @property int|null                                    $graduation_category_id
 * @property float|null                                  $credit
 * @property int|null                                    $created_by
 * @property Carbon|null                                 $created_at
 * @property Carbon|null                                 $updated_at
 * @property string|null                                 $deleted_at
 * @property-read Collection<int, GraduationCategorySQL> $graduationCategories
 * @property-read int|null                               $graduation_categories_count
 * @property-read Collection<int, ProgramSQL>            $programs
 * @property-read int|null                               $programs_count
 * @method static Builder|ProgramGraduationCategorySQL newModelQuery()
 * @method static Builder|ProgramGraduationCategorySQL newQuery()
 * @method static Builder|ProgramGraduationCategorySQL query()
 * @method static Builder|ProgramGraduationCategorySQL whereCreatedAt($value)
 * @method static Builder|ProgramGraduationCategorySQL whereCreatedBy($value)
 * @method static Builder|ProgramGraduationCategorySQL whereCredit($value)
 * @method static Builder|ProgramGraduationCategorySQL whereDeletedAt($value)
 * @method static Builder|ProgramGraduationCategorySQL whereExternalId($value)
 * @method static Builder|ProgramGraduationCategorySQL whereGraduationCategoryId($value)
 * @method static Builder|ProgramGraduationCategorySQL whereId($value)
 * @method static Builder|ProgramGraduationCategorySQL whereProgramId($value)
 * @method static Builder|ProgramGraduationCategorySQL whereUpdatedAt($value)
 * @method static Builder|ProgramGraduationCategorySQL whereUuid($value)
 * @mixin Eloquent
 */
class ProgramGraduationCategorySQL extends Model implements ProgramGraduationCategory
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable = ['program_id', 'graduation_category_id'];

    protected $connection = DbConnectionConstant::SQL;

    public function graduationCategories(): BelongsToMany
    {
        return $this->belongsToMany(GraduationCategorySQL::class, 'graduation_category_id')
                    ->whereNull('deleted_at');
    }

    public function programs(): HasMany
    {
        return $this->hasMany(ProgramSQL::class, 'id', 'program_id')
                    ->select('id', 'name', 'description', 'school_id')
                    ->whereNull('deleted_at');
    }
}
