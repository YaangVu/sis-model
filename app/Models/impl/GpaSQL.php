<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Gpa;

/**
 * YaangVu\SisModel\App\Models\impl\GpaSQL
 *
 * @property int         $id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int         $user_id
 * @property int         $term_id
 * @property int         $school_id
 * @property float       $learned_credit
 * @property float       $earned_credit
 * @property float       $gpa
 * @property float       $bonus_gpa
 * @method static Builder|GpaSQL newModelQuery()
 * @method static Builder|GpaSQL newQuery()
 * @method static Builder|GpaSQL query()
 * @method static Builder|GpaSQL whereBonusGpa($value)
 * @method static Builder|GpaSQL whereCreatedAt($value)
 * @method static Builder|GpaSQL whereCreatedBy($value)
 * @method static Builder|GpaSQL whereEarnedCredit($value)
 * @method static Builder|GpaSQL whereExternalId($value)
 * @method static Builder|GpaSQL whereGpa($value)
 * @method static Builder|GpaSQL whereId($value)
 * @method static Builder|GpaSQL whereLearnedCredit($value)
 * @method static Builder|GpaSQL whereSchoolId($value)
 * @method static Builder|GpaSQL whereTermId($value)
 * @method static Builder|GpaSQL whereUpdatedAt($value)
 * @method static Builder|GpaSQL whereUserId($value)
 * @method static Builder|GpaSQL whereUuid($value)
 * @mixin Eloquent
 */
class GpaSQL extends Model implements Gpa
{
    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::EX_ID, CodeConstant::UUID,
            'user_id', 'term_id', 'school_id', 'learned_credit', 'earned_credit',
            'cpa', 'bonus_cpa'
        ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;
}
