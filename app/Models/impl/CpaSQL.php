<?php

namespace YaangVu\SisModel\App\Models\impl;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Cpa;
use YaangVu\SisModel\Database\Factories\CpaFactory;

/**
 * YaangVu\SisModel\App\Models\impl\CpaSQL
 *
 * @property int          $id
 * @property int|null     $created_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property string|null  $uuid
 * @property string|null  $external_id
 * @property int          $user_id
 * @property int          $school_id
 * @property float        $learned_credit
 * @property float        $earned_credit
 * @property float        $cpa
 * @property float        $bonus_cpa
 * @property int|null     $rank
 * @property int|null     $program_id
 * @property int|null     $grade_id
 * @property-read UserSQL $user
 * @method static CpaFactory factory(...$parameters)
 * @method static Builder|CpaSQL newModelQuery()
 * @method static Builder|CpaSQL newQuery()
 * @method static Builder|CpaSQL query()
 * @method static Builder|CpaSQL whereBonusCpa($value)
 * @method static Builder|CpaSQL whereCpa($value)
 * @method static Builder|CpaSQL whereCreatedAt($value)
 * @method static Builder|CpaSQL whereCreatedBy($value)
 * @method static Builder|CpaSQL whereEarnedCredit($value)
 * @method static Builder|CpaSQL whereExternalId($value)
 * @method static Builder|CpaSQL whereGradeId($value)
 * @method static Builder|CpaSQL whereId($value)
 * @method static Builder|CpaSQL whereLearnedCredit($value)
 * @method static Builder|CpaSQL whereProgramId($value)
 * @method static Builder|CpaSQL whereRank($value)
 * @method static Builder|CpaSQL whereSchoolId($value)
 * @method static Builder|CpaSQL whereUpdatedAt($value)
 * @method static Builder|CpaSQL whereUserId($value)
 * @method static Builder|CpaSQL whereUuid($value)
 * @mixin Eloquent
 */
class CpaSQL extends Model implements Cpa
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::EX_ID, CodeConstant::UUID,
            'user_id', 'school_id', 'learned_credit', 'earned_credit',
            'cpa', 'bonus_cpa', 'rank', 'program_id', 'grade_id'
        ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;

    protected static function newFactory(): CpaFactory
    {
        return new CpaFactory();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class);
    }
}
