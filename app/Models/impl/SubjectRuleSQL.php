<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\SubjectRule;

/**
 * YaangVu\SisModel\App\Models\impl\SubjectRuleSQL
 *
 * @property int         $id
 * @property string|null $uuid  subject id
 * @property string|null $external_id
 * @property string|null $type
 * @property int         $subject_id
 * @property int|null    $relevance_subject_id
 * @property string|null $group group of rules
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|SubjectRuleSQL newModelQuery()
 * @method static Builder|SubjectRuleSQL newQuery()
 * @method static Builder|SubjectRuleSQL query()
 * @method static Builder|SubjectRuleSQL whereCreatedAt($value)
 * @method static Builder|SubjectRuleSQL whereCreatedBy($value)
 * @method static Builder|SubjectRuleSQL whereDeletedAt($value)
 * @method static Builder|SubjectRuleSQL whereExternalId($value)
 * @method static Builder|SubjectRuleSQL whereGroup($value)
 * @method static Builder|SubjectRuleSQL whereId($value)
 * @method static Builder|SubjectRuleSQL whereRelevanceSubjectId($value)
 * @method static Builder|SubjectRuleSQL whereSubjectId($value)
 * @method static Builder|SubjectRuleSQL whereType($value)
 * @method static Builder|SubjectRuleSQL whereUpdatedAt($value)
 * @method static Builder|SubjectRuleSQL whereUuid($value)
 * @mixin Eloquent
 */
class SubjectRuleSQL extends Model implements SubjectRule
{
    protected $table = self::table;

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
