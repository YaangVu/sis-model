<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * YaangVu\SisModel\App\Models\GradeScale
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GradeScale newModelQuery()
 * @method static Builder|GradeScale newQuery()
 * @method static Builder|GradeScale query()
 * @method static Builder|GradeScale whereCreatedAt($value)
 * @method static Builder|GradeScale whereCreatedBy($value)
 * @method static Builder|GradeScale whereDeletedAt($value)
 * @method static Builder|GradeScale whereDescription($value)
 * @method static Builder|GradeScale whereId($value)
 * @method static Builder|GradeScale whereName($value)
 * @method static Builder|GradeScale whereUpdatedAt($value)
 * @mixin Eloquent
 */
class GradeScale extends Model
{
    use SoftDeletes, HasFactory;
}
