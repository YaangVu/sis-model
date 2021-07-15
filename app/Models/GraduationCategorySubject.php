<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\GraduationCategorySubject
 *
 * @method static Builder|GraduationCategorySubject newModelQuery()
 * @method static Builder|GraduationCategorySubject newQuery()
 * @method static Builder|GraduationCategorySubject query()
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int         $graduation_category_id
 * @property int         $subject_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GraduationCategorySubject whereCreatedAt($value)
 * @method static Builder|GraduationCategorySubject whereCreatedBy($value)
 * @method static Builder|GraduationCategorySubject whereDeletedAt($value)
 * @method static Builder|GraduationCategorySubject whereExternalId($value)
 * @method static Builder|GraduationCategorySubject whereGraduationCategoryId($value)
 * @method static Builder|GraduationCategorySubject whereId($value)
 * @method static Builder|GraduationCategorySubject whereSubjectId($value)
 * @method static Builder|GraduationCategorySubject whereUpdatedAt($value)
 * @method static Builder|GraduationCategorySubject whereUuid($value)
 */
class GraduationCategorySubject extends Model
{
    protected $table = 'graduation_category_subject';

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = [
            CodeConstant::UUID,
            CodeConstant::EX_ID,
            'graduation_category_id',
            'subject_id',
        ];
}
