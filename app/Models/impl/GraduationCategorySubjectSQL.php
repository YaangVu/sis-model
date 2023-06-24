<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\GraduationCategorySubject;

/**
 * YaangVu\SisModel\App\Models\impl\GraduationCategorySubjectSQL
 *
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int         $graduation_category_id
 * @property int         $subject_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GraduationCategorySubjectSQL newModelQuery()
 * @method static Builder|GraduationCategorySubjectSQL newQuery()
 * @method static Builder|GraduationCategorySubjectSQL query()
 * @method static Builder|GraduationCategorySubjectSQL whereCreatedAt($value)
 * @method static Builder|GraduationCategorySubjectSQL whereCreatedBy($value)
 * @method static Builder|GraduationCategorySubjectSQL whereDeletedAt($value)
 * @method static Builder|GraduationCategorySubjectSQL whereExternalId($value)
 * @method static Builder|GraduationCategorySubjectSQL whereGraduationCategoryId($value)
 * @method static Builder|GraduationCategorySubjectSQL whereId($value)
 * @method static Builder|GraduationCategorySubjectSQL whereSubjectId($value)
 * @method static Builder|GraduationCategorySubjectSQL whereUpdatedAt($value)
 * @method static Builder|GraduationCategorySubjectSQL whereUuid($value)
 * @mixin Eloquent
 */
class GraduationCategorySubjectSQL extends Model implements GraduationCategorySubject
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = [
            CodeConstant::UUID,
            CodeConstant::EX_ID,
            'graduation_category_id',
            'subject_id',
        ];
}
