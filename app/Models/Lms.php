<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * YaangVu\SisModel\App\Models\Lms
 *
 * @property int $id
 * @property string $name
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Lms newModelQuery()
 * @method static Builder|Lms newQuery()
 * @method static Builder|Lms query()
 * @method static Builder|Lms whereCreatedAt($value)
 * @method static Builder|Lms whereCreatedBy($value)
 * @method static Builder|Lms whereDeletedAt($value)
 * @method static Builder|Lms whereId($value)
 * @method static Builder|Lms whereName($value)
 * @method static Builder|Lms whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Lms extends Model
{
    use SoftDeletes, HasFactory;
}
