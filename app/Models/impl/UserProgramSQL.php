<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\UserProgram;

/**
 * YaangVu\SisModel\App\Models\UserProgramSQL
 *
 * @method static Builder|UserProgramSQL newModelQuery()
 * @method static Builder|UserProgramSQL newQuery()
 * @method static Builder|UserProgramSQL query()
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $uuid
 * @property string|null $external_id
 * @property int         $user_id
 * @property int         $school_id
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|UserProgramSQL whereCreatedAt($value)
 * @method static Builder|UserProgramSQL whereCreatedBy($value)
 * @method static Builder|UserProgramSQL whereDeletedAt($value)
 * @method static Builder|UserProgramSQL whereExternalId($value)
 * @method static Builder|UserProgramSQL whereId($value)
 * @method static Builder|UserProgramSQL whereSchoolId($value)
 * @method static Builder|UserProgramSQL whereUpdatedAt($value)
 * @method static Builder|UserProgramSQL whereUserId($value)
 * @method static Builder|UserProgramSQL whereUuid($value)
 * @property int         $program_id
 * @method static Builder|UserProgramSQL whereProgramId($value)
 */
class UserProgramSQL extends Model implements UserProgram
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = self::table;

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
