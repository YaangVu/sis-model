<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\UserProgram
 *
 * @method static Builder|UserProgram newModelQuery()
 * @method static Builder|UserProgram newQuery()
 * @method static Builder|UserProgram query()
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
 * @method static Builder|UserProgram whereCreatedAt($value)
 * @method static Builder|UserProgram whereCreatedBy($value)
 * @method static Builder|UserProgram whereDeletedAt($value)
 * @method static Builder|UserProgram whereExternalId($value)
 * @method static Builder|UserProgram whereId($value)
 * @method static Builder|UserProgram whereSchoolId($value)
 * @method static Builder|UserProgram whereUpdatedAt($value)
 * @method static Builder|UserProgram whereUserId($value)
 * @method static Builder|UserProgram whereUuid($value)
 */
class UserProgram extends Model
{
    protected $connection = DbConnectionConstant::SQL;

    protected $table = 'user_program';

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
