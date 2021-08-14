<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Cpa;
use YaangVu\SisModel\Database\Factories\CpaFactory;

/**
 * YaangVu\SisModel\App\Models\impl\CpaSQL
 *
 * @property int         $id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int         $user_id
 * @property int         $school_id
 * @property float       $learned_credit
 * @property float       $earned_credit
 * @property float       $cpa
 * @property float       $bonus_cpa
 * @method static Builder|CpaSQL newModelQuery()
 * @method static Builder|CpaSQL newQuery()
 * @method static Builder|CpaSQL query()
 * @method static Builder|CpaSQL whereBonusCpa($value)
 * @method static Builder|CpaSQL whereCpa($value)
 * @method static Builder|CpaSQL whereCreatedAt($value)
 * @method static Builder|CpaSQL whereCreatedBy($value)
 * @method static Builder|CpaSQL whereEarnedCredit($value)
 * @method static Builder|CpaSQL whereExternalId($value)
 * @method static Builder|CpaSQL whereId($value)
 * @method static Builder|CpaSQL whereLearnedCredit($value)
 * @method static Builder|CpaSQL whereSchoolId($value)
 * @method static Builder|CpaSQL whereUpdatedAt($value)
 * @method static Builder|CpaSQL whereUserId($value)
 * @method static Builder|CpaSQL whereUuid($value)
 * @mixin Eloquent
 * @property int|null    $rank
 * @method static Builder|CpaSQL whereRank($value)
 */
class CpaSQL extends Model implements Cpa
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [CodeConstant::EX_ID, CodeConstant::UUID,
           'user_id', 'school_id', 'learned_credit', 'earned_credit',
           'cpa', 'bonus_cpa'
        ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;

    protected static function newFactory(): CpaFactory
    {
        return new CpaFactory();
    }
}
