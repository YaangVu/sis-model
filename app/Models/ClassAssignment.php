<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\ClassAssignment
 *
 * @property int         $id
 * @property int         $user_id
 * @property int         $class_id
 * @property string      $assignment
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ClassAssignment newModelQuery()
 * @method static Builder|ClassAssignment newQuery()
 * @method static Builder|ClassAssignment query()
 * @method static Builder|ClassAssignment whereAssignment($value)
 * @method static Builder|ClassAssignment whereClassId($value)
 * @method static Builder|ClassAssignment whereCreatedAt($value)
 * @method static Builder|ClassAssignment whereCreatedBy($value)
 * @method static Builder|ClassAssignment whereDeletedAt($value)
 * @method static Builder|ClassAssignment whereId($value)
 * @method static Builder|ClassAssignment whereUpdatedAt($value)
 * @method static Builder|ClassAssignment whereUserId($value)
 * @mixin Eloquent
 */
class ClassAssignment extends Model
{
    protected $connection = DbConnectionConstant::SQL;
}
