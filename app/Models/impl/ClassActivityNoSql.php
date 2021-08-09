<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ClassActivity;

/**
 * @property int         $id
 * @property string|null $final_score
 * @property string|null $class_activity_category_id
 * @property int|null    $user_id
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
 * @method static Builder|ClassActivityNoSql whereClassId($value)
 * @method static Builder|ClassActivityNoSql whereClassActivityCategoryId($value)
 * @method static Builder|ClassActivityNoSql whereUserId($value)
 * @method static Builder|ClassActivityNoSql whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $uuid
 * @property string|null $external_id
 * @method static Builder|ClassActivityNoSql whereExternalId($value)
 * @method static Builder|ClassActivityNoSql whereUuid($value)
 */
class ClassActivityNoSql extends Model implements ClassActivity
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    protected $connection = DbConnectionConstant::NOSQL;
}