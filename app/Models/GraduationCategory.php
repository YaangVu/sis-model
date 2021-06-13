<?php

namespace YaangVu\SisModel\App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * YaangVu\SisModel\App\Models\GraduationCategory
 *
 * @property int         $id
 * @property string      $name
 * @property string|null $description
 * @property float|null  $credit
 * @property string|null $status
 * @property int|null    $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|GraduationCategory newModelQuery()
 * @method static Builder|GraduationCategory newQuery()
 * @method static Builder|GraduationCategory query()
 * @method static Builder|GraduationCategory whereCreatedAt($value)
 * @method static Builder|GraduationCategory whereCreatedBy($value)
 * @method static Builder|GraduationCategory whereCredit($value)
 * @method static Builder|GraduationCategory whereDeletedAt($value)
 * @method static Builder|GraduationCategory whereDescription($value)
 * @method static Builder|GraduationCategory whereId($value)
 * @method static Builder|GraduationCategory whereName($value)
 * @method static Builder|GraduationCategory whereStatus($value)
 * @method static Builder|GraduationCategory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class GraduationCategory extends Model
{
    use SoftDeletes, HasFactory;
}
