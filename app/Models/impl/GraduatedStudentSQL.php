<?php
/**
 * @Author Edogawa Conan
 * @Date   Oct 04, 2021
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\GraduatedStudent;
use YaangVu\SisModel\App\Models\SQLModel;

/**
 * YaangVu\SisModel\App\Models\GraduatedStudentSQL
 *
 * @property int                  $id
 * @property int|null             $user_id
 * @property string|null          $user_uuid
 * @property int|null             $program_id
 * @property string|null          $graduated_at
 * @property boolean              $is_graduated
 * @property Carbon|null          $created_at
 * @property Carbon|null          $updated_at
 * @method static Builder|GraduatedStudentSQL newModelQuery()
 * @method static Builder|GraduatedStudentSQL newQuery()
 * @method static Builder|GraduatedStudentSQL query()
 * @method static Builder|GraduatedStudentSQL whereUserId($value)
 * @method static Builder|GraduatedStudentSQL whereUserUuid($value)
 * @method static Builder|GraduatedStudentSQL whereProgramId($value)
 * @method static Builder|GraduatedStudentSQL whereId($value)
 * @method static Builder|GraduatedStudentSQL whereGraduatedAt($value)
 * @method static Builder|GraduatedStudentSQL whereIsGraduated($value)
 * @method static Builder|GraduatedStudentSQL whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read UserSQL|null    $user
 * @property-read ProgramSQL|null $program
 */
class GraduatedStudentSQL extends SQLModel implements GraduatedStudent
{
    protected $table = self::table;

    protected $fillable
        = [
            'user_id',
            'user_uuid',
            'program_id',
            'graduated_at',
            'is_graduated',
        ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'user_id', 'id');
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(ProgramSQL::class, 'program_id', 'id');
    }
}