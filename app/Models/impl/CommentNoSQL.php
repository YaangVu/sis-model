<?php
/**
 * @Author kyhoang
 * @Date   Aug 08, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\CommentNoSQL
 *
 * @property int                $id
 * @property string             $comment
 * @property string|null        $class_id
 * @property string|null        $status
 * @property string|null        $external_id
 * @property int|null           $created_by
 * @property Carbon|null        $created_at
 * @property Carbon|null        $updated_at
 * @property string|null        $deleted_at
 * @property string|null        $description
 * @property int|null           $course_id
 * @method static Builder|ClassNoSQL newModelQuery()
 * @method static Builder|ClassNoSQL newQuery()
 * @method static Builder|ClassNoSQL query()
 * @method static Builder|ClassNoSQL whereCreatedAt($value)
 * @method static Builder|ClassNoSQL whereCreatedBy($value)
 * @method static Builder|ClassNoSQL whereComment($value)
 * @method static Builder|ClassNoSQL whereDeletedAt($value)
 * @method static Builder|ClassNoSQL whereClassId($value)
 * @method static Builder|ClassNoSQL whereExternalId($value)
 * @method static Builder|ClassNoSQL whereLmsId($value)
 * @method static Builder|ClassNoSQL whereGradeScaleId($value)
 * @method static Builder|ClassNoSQL whereId($value)
 * @method static Builder|ClassNoSQL whereLmsSystem($value)
 * @method static Builder|ClassNoSQL whereName($value)
 * @method static Builder|ClassNoSQL whereStartDate($value)
 * @method static Builder|ClassNoSQL whereStatus($value)
 * @method static Builder|ClassNoSQL whereTermId($value)
 * @method static Builder|ClassNoSQL whereUpdatedAt($value)
 * @method static Builder|ClassNoSQL onlyTrashed()
 * @method static Builder|ClassNoSQL withTrashed()
 * @method static Builder|ClassNoSQL withoutTrashed()
 * @method static Builder|ClassNoSQL whereCourseId($value)
 * @method static Builder|ClassNoSQL whereDescription($value)
 * @mixin Eloquent
 * @property string|null        $zone
 * @method static Builder|ClassNoSQL whereZone($value)
 * @property string|null        $uuid class id
 * @property int|null           $school_id
 * @method static Builder|ClassNoSQL whereSchoolId($value)
 * @method static Builder|ClassNoSQL whereUuid($value)
 * @property int|null           $subject_id
 * @method static Builder|ClassNoSQL whereSubjectId($value)
 * @property-read ClassSQL|null $classSql
 */
class CommentNoSQL extends Model
{
    protected $table = 'comments';

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}