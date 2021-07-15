<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Subject
 *
 * @property int         $id
 * @property string|null $uuid subject id
 * @property string|null $external_id
 * @property string      $name
 * @property string      $credit
 * @property string|null $description
 * @property string|null $status
 * @property int|null    $grade_id
 * @property int|null    $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Subject newModelQuery()
 * @method static Builder|Subject newQuery()
 * @method static Builder|Subject query()
 * @method static Builder|Subject whereCreatedAt($value)
 * @method static Builder|Subject whereCreatedBy($value)
 * @method static Builder|Subject whereCredit($value)
 * @method static Builder|Subject whereDeletedAt($value)
 * @method static Builder|Subject whereDescription($value)
 * @method static Builder|Subject whereExternalId($value)
 * @method static Builder|Subject whereGradeId($value)
 * @method static Builder|Subject whereId($value)
 * @method static Builder|Subject whereName($value)
 * @method static Builder|Subject whereSchoolId($value)
 * @method static Builder|Subject whereStatus($value)
 * @method static Builder|Subject whereUpdatedAt($value)
 * @method static Builder|Subject whereUuid($value)
 * @mixin Eloquent
 */
class Subject extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = [
            CodeConstant::UUID,
            CodeConstant::EX_ID,
            'name',
            'credit',
            'description',
            'status',
            'grade_id',
            'school_id'
        ];
}
