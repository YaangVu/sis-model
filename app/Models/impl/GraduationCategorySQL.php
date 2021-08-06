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
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\GraduationCategory;

/**
 * YaangVu\SisModel\App\Models\GraduationCategorySQL
 *
 * @property int                          $id
 * @property string                       $name
 * @property string|null                  $description
 * @property float|null                   $credit
 * @property string|null                  $status
 * @property int|null                     $created_by
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property string|null                  $deleted_at
 * @method static Builder|GraduationCategorySQL newModelQuery()
 * @method static Builder|GraduationCategorySQL newQuery()
 * @method static Builder|GraduationCategorySQL query()
 * @method static Builder|GraduationCategorySQL whereCreatedAt($value)
 * @method static Builder|GraduationCategorySQL whereCreatedBy($value)
 * @method static Builder|GraduationCategorySQL whereCredit($value)
 * @method static Builder|GraduationCategorySQL whereDeletedAt($value)
 * @method static Builder|GraduationCategorySQL whereDescription($value)
 * @method static Builder|GraduationCategorySQL whereId($value)
 * @method static Builder|GraduationCategorySQL whereName($value)
 * @method static Builder|GraduationCategorySQL whereStatus($value)
 * @method static Builder|GraduationCategorySQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|GraduationCategorySQL onlyTrashed()
 * @method static Builder|GraduationCategorySQL withTrashed()
 * @method static Builder|GraduationCategorySQL withoutTrashed()
 * @property string|null                  $uuid
 * @property string|null                  $external_id
 * @method static Builder|GraduationCategorySQL whereExternalId($value)
 * @method static Builder|GraduationCategorySQL whereUuid($value)
 * @property-read Collection|ProgramSQL[] $programs
 * @property-read int|null                $programs_count
 */
class GraduationCategorySQL extends Model implements GraduationCategory
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $fillable = ['name', 'description', 'credit', 'status'];

    protected $connection = DbConnectionConstant::SQL;

    public function programs(): BelongsToMany
    {
        return $this->belongsToMany(ProgramSQL::class, (new ProgramGraduationCategorySQL())->getTable(),
                                    'graduation_category_id', 'program_id');
    }
}
