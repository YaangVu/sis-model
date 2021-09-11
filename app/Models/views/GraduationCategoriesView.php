<?php

namespace YaangVu\SisModel\App\Models\views;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * YaangVu\SisModel\App\Models\views\GraduationCategoriesView
 *
 * @property-read int|null    $graduation_category_id
 * @property-read string|null $graduation_category_name
 * @property-read float|null  $graduation_category_credit
 * @property-read string|null $credit
 * @property-read int|null    $subject_id
 * @property-read int|null    $program_id
 * @property-read int|null    $school_id
 * @method static Builder|GraduationCategoriesView newModelQuery()
 * @method static Builder|GraduationCategoriesView newQuery()
 * @method static Builder|GraduationCategoriesView query()
 * @method static Builder|GraduationCategoriesView whereCredit($value)
 * @method static Builder|GraduationCategoriesView whereGraduationCategoryCredit($value)
 * @method static Builder|GraduationCategoriesView whereGraduationCategoryId($value)
 * @method static Builder|GraduationCategoriesView whereGraduationCategoryName($value)
 * @method static Builder|GraduationCategoriesView whereProgramId($value)
 * @method static Builder|GraduationCategoriesView whereSchoolId($value)
 * @method static Builder|GraduationCategoriesView whereSubjectId($value)
 * @mixin Eloquent
 */
class GraduationCategoriesView extends Model
{
    protected $table = 'graduation_categories_view';
}
