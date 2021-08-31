<?php
/**
 * Created by PhpStorm
 * User: tungnd
 * Date: 8/30/21
 * Time: 17:16
 */


namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
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
 * @property-read UserSQL $user
 * @method static CpaFactory factory(...$parameters)
 * @method static Builder|CpaSQL newModelQuery()
 * @method static Builder|CpaSQL newQuery()
 * @method static Builder|CpaSQL query()
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
