<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use YaangVu\Constant\CodeConstant;

/**
 * App\Models\Course
 *
 * @property int         $id
 * @property string|null $name   course name
 * @property string|null $system From which system?
 * @property string|null $external_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereDeletedAt($value)
 * @method static Builder|Course whereExternalId($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereName($value)
 * @method static Builder|Course whereSystem($value)
 * @method static Builder|Course whereUpdatedAt($value)
 */
class Course extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', CodeConstant::EX_ID, CodeConstant::LMS_SYSTEM];
}
