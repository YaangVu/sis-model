<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\SubjectRule
 *
 * @property int         $id
 * @property string|null $uuid  subject id
 * @property string|null $external_id
 * @property string|null $type
 * @property int         $subject_id
 * @property int|null    $relevance_subject_id
 * @property int         $group group of rules
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|SubjectRule newModelQuery()
 * @method static Builder|SubjectRule newQuery()
 * @method static Builder|SubjectRule query()
 * @method static Builder|SubjectRule whereCreatedAt($value)
 * @method static Builder|SubjectRule whereCreatedBy($value)
 * @method static Builder|SubjectRule whereDeletedAt($value)
 * @method static Builder|SubjectRule whereExternalId($value)
 * @method static Builder|SubjectRule whereGroup($value)
 * @method static Builder|SubjectRule whereId($value)
 * @method static Builder|SubjectRule whereRelevanceSubjectId($value)
 * @method static Builder|SubjectRule whereSubjectId($value)
 * @method static Builder|SubjectRule whereType($value)
 * @method static Builder|SubjectRule whereUpdatedAt($value)
 * @method static Builder|SubjectRule whereUuid($value)
 * @mixin Eloquent
 */
class SubjectRule extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $fillable
        = [
            CodeConstant::UUID,
            CodeConstant::EX_ID,
            'type',
            'subject_id',
            'relevance_subject_id',
            'group',
        ];
}
