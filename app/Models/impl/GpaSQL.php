<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
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
 * @property int|null     $rank
 * @method static Builder|GpaSQL whereRank($value)
 * @property int|null     $grade_id grade of student, such as: K-12
 * @method static GpaFactory factory(...$parameters)
 * @method static Builder|GpaSQL whereGradeId($value)
 * @property-read UserSQL $user
 * @property int|null     $program_id
 * @method static Builder|GpaSQL whereProgramId($value)
 * @property float|null $cpa
 * @property float|null $bonus_cpa
 * @method static Builder|GpaSQL whereBonusCpa($value)
 * @method static Builder|GpaSQL whereCpa($value)
 * @property float|null $total_learned_credit
 * @property float|null $total_earned_credit
 * @method static Builder|GpaSQL whereTotalEarnedCredit($value)
 * @method static Builder|GpaSQL whereTotalLearnedCredit($value)
 */
class GpaSQL extends Model implements Gpa
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::EX_ID, CodeConstant::UUID,
            'user_id', 'term_id', 'school_id', 'learned_credit', 'earned_credit',
            'gpa', 'bonus_gpa', 'cpa', 'bonus_cpa', 'grade_id', 'rank'
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
