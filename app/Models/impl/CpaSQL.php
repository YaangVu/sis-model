<?php
/**
 * Created by PhpStorm
 * User: tungnd
 * Date: 8/30/21
 * Time: 17:16
 */


namespace YaangVu\SisModel\App\Models\impl;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Cpa;
use YaangVu\SisModel\Database\Factories\CpaFactory;

/**
 * YaangVu\SisModel\App\Models\impl\CpaSQL
 *
 * @property-read \YaangVu\SisModel\App\Models\impl\UserSQL $user
 * @method static \YaangVu\SisModel\Database\Factories\CpaFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CpaSQL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CpaSQL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CpaSQL query()
 * @mixin \Eloquent
 */
class CpaSQL extends Model implements Cpa
{
    use HasFactory;

    protected $table = self::table;

    protected $fillable
        = [
            CodeConstant::EX_ID, CodeConstant::UUID,
            'user_id', 'school_id', 'learned_credit', 'earned_credit',
            'cpa', 'bonus_cpa', 'rank', 'program_id'
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
