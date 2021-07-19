<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use YaangVu\SisModel\App\Models\ClassAssignment;

/**
 * YaangVu\SisModel\App\Models\ClassAssignmentSQL
 *
 * @property int          $id
 * @property int          $user_id
 * @property int          $class_id
 * @property string       $assignment
 * @property int|null     $created_by
 * @property Carbon|null  $created_at
 * @property Carbon|null  $updated_at
 * @property string|null  $deleted_at
 * @method static Builder|ClassAssignmentSQL newModelQuery()
 * @method static Builder|ClassAssignmentSQL newQuery()
 * @method static Builder|ClassAssignmentSQL query()
 * @method static Builder|ClassAssignmentSQL whereAssignment($value)
 * @method static Builder|ClassAssignmentSQL whereClassId($value)
 * @method static Builder|ClassAssignmentSQL whereCreatedAt($value)
 * @method static Builder|ClassAssignmentSQL whereCreatedBy($value)
 * @method static Builder|ClassAssignmentSQL whereDeletedAt($value)
 * @method static Builder|ClassAssignmentSQL whereId($value)
 * @method static Builder|ClassAssignmentSQL whereUpdatedAt($value)
 * @method static Builder|ClassAssignmentSQL whereUserId($value)
 * @mixin Eloquent
 * @property string|null  $external_id
 * @method static Builder|ClassSQL whereExternalId($value)
 * @property string|null  $uuid
 * @method static Builder|ClassAssignmentSQL whereUuid($value)
 * @property integer|null $position
 * @method static Builder|ClassSQL wherePosition($value)
 */
class ClassAssignmentSQL extends ClassAssignment
{
    public function users(): BelongsTo
    {
        return $this->belongsTo(UserSQL::class, 'user_id', 'id');
    }

    public function classes(): BelongsTo
    {
        return $this->belongsTo(ClassSql::class, 'class_id', 'id');
    }
}
