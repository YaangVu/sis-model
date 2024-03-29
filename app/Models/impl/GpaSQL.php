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
use YaangVu\SisModel\App\Models\Gpa;
use YaangVu\SisModel\Database\Factories\GpaFactory;

/**
 * YaangVu\SisModel\App\Models\impl\GpaSQL
 *
 * @property int          $id
 * @property int|null     $created_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property string|null  $uuid
 * @property string|null  $external_id
 * @property int          $user_id
 * @property int          $term_id
 * @property int          $school_id
 * @property float        $learned_credit
 * @property float        $earned_credit
 * @property float        $gpa
 * @property float        $bonus_gpa
 * @property int|null     $rank
 * @property int|null     $grade_id grade of student, such as: K-12
 * @property int|null     $program_id
 * @property float|null   $cpa
 * @property float|null   $bonus_cpa
 * @property float|null   $total_learned_credit
 * @property float|null   $total_earned_credit
 * @property float|null   $gpa_unweighted
 * @property-read UserSQL $user
 * @method static GpaFactory factory(...$parameters)
 * @method static Builder|GpaSQL newModelQuery()
 * @method static Builder|GpaSQL newQuery()
 * @method static Builder|GpaSQL query()
 * @method static Builder|GpaSQL whereBonusCpa($value)
 * @method static Builder|GpaSQL whereBonusGpa($value)
 * @method static Builder|GpaSQL whereCpa($value)
 * @method static Builder|GpaSQL whereCreatedAt($value)
 * @method static Builder|GpaSQL whereCreatedBy($value)
 * @method static Builder|GpaSQL whereEarnedCredit($value)
 * @method static Builder|GpaSQL whereExternalId($value)
 * @method static Builder|GpaSQL whereGpa($value)
 * @method static Builder|GpaSQL whereGpaUnweighted($value)
 * @method static Builder|GpaSQL whereGradeId($value)
 * @method static Builder|GpaSQL whereId($value)
 * @method static Builder|GpaSQL whereLearnedCredit($value)
 * @method static Builder|GpaSQL whereProgramId($value)
 * @method static Builder|GpaSQL whereRank($value)
 * @method static Builder|GpaSQL whereSchoolId($value)
 * @method static Builder|GpaSQL whereTermId($value)
 * @method static Builder|GpaSQL whereTotalEarnedCredit($value)
 * @method static Builder|GpaSQL whereTotalLearnedCredit($value)
 * @method static Builder|GpaSQL whereUpdatedAt($value)
 * @method static Builder|GpaSQL whereUserId($value)
 * @method static Builder|GpaSQL whereUuid($value)
 * @mixin Eloquent
 */
class GpaSQL extends Model implements Gpa
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::EX_ID, CodeConstant::UUID,
            'user_id', 'term_id', 'school_id', 'learned_credit', 'earned_credit',
            'gpa', 'bonus_gpa', 'cpa', 'bonus_cpa', 'grade_id', 'rank', 'program_id',
            'total_learned_credit', 'total_earned_credit', 'gpa_unweighted'
        ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $connection = DbConnectionConstant::SQL;

    protected string $code = CodeConstant::UUID;

    protected static function newFactory(): GpaFactory
    {
        return new GpaFactory();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class);
    }
}
