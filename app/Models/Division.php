<?php

namespace YaangVu\SisModel\App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;

/**
 * YaangVu\SisModel\App\Models\Division
 *
 * @property int         $id
 * @property string      $name
 * @property int         $school_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|Division newModelQuery()
 * @method static Builder|Division newQuery()
 * @method static \Illuminate\Database\Query\Builder|Division onlyTrashed()
 * @method static Builder|Division query()
 * @method static Builder|Division whereCreatedAt($value)
 * @method static Builder|Division whereDeletedAt($value)
 * @method static Builder|Division whereId($value)
 * @method static Builder|Division whereName($value)
 * @method static Builder|Division whereSchoolId($value)
 * @method static Builder|Division whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Division withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Division withoutTrashed()
 * @mixin \Eloquent
 */
class Division extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM];
}
