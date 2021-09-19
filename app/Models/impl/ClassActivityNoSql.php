<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ClassActivity;

/**
 * @property int         $id
 * @property string|null $final_score
 * @property string|null $current_score
 * @property string|null $grade_letter
 * @property string|null $is_pass
 * @property string|null $user_nosql_id
 * @property string|null $uuid
 * @property string|null $class_activity_category_id
 * @property int|null    $user_id
 * @property string|null $student_code
 * @property string|null $school_uuid
 * @property int|null    $class_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|ClassActivityNoSql newModelQuery()
 * @method static Builder|ClassActivityNoSql newQuery()
 * @method static Builder|ClassActivityNoSql query()
 * @method static Builder|ClassActivityNoSql whereCreatedAt($value)
 * @method static Builder|ClassActivityNoSql whereCreatedBy($value)
 * @method static Builder|ClassActivityNoSql whereDeletedAt($value)
 * @method static Builder|ClassActivityNoSql whereDescription($value)
 * @method static Builder|ClassActivityNoSql whereId($value)
 * @method static Builder|ClassActivityNoSql whereUuid($value)
 * @method static Builder|ClassActivityNoSql whereStudentCode($value)
 * @method static Builder|ClassActivityNoSql whereSchoolUuid($value)
 * @method static Builder|ClassActivityNoSql whereClassId($value)
 * @method static Builder|ClassActivityNoSql whereClassActivityCategoryId($value)
 * @method static Builder|ClassActivityNoSql whereUserId($value)
 * @method static Builder|ClassActivityNoSql whereUpdatedAt($value)
 * @mixin Eloquent
 * @property array|null  $activities
 * @property string|null $external_id
 * @method static Builder|ClassActivityNoSql whereExternalId($value)
 * @property string|null $source
 * @method static Builder|ClassActivityNoSql whereSource($value)
 * @property string|null $edmentum_id
 * @method static Builder|ClassActivityNoSql whereEdmentumId($value)
 * @property string|null $agilix_id
 * @method static Builder|ClassActivityNoSql whereAgilixId($value)
 * @property string|null $lms_id
 * @method static Builder|ClassActivityNoSql whereLmsId($value)
 * @property string|null $lms_name
 * @method static Builder|ClassActivityNoSql whereLmsName($value)
 * @property string|null $student_uuid
 * @method static Builder|ClassActivityNoSql whereStudentUuid($value)
 */
class ClassActivityNoSql extends Model implements ClassActivity
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;

    function student(): BelongsTo|\Jenssegers\Mongodb\Relations\BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'student_uuid', 'uuid');
    }

    public function getActivitiesAttribute($value)
    {
        if (is_array($value))
            foreach ($value as $index => $activity)
                $value[$index] = (object)$activity;

        return $value;
    }
}