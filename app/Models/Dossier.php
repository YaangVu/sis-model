<?php

namespace YaangVu\SisModel\App\Models;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;

/**
 * YaangVu\SisModel\App\Models\Dossier
 * @property string       $_id
 * @property string       $file_url
 * @property string|null  $action
 * @property string|null  $status
 * @property string|null  $storage_type
 * @property string|null  $path
 * @property string|null  $uuid
 * @property string|null  $exchange_name
 * @property integer|null $created_by
 * @property Carbon|null  $updated_at
 * @property Carbon|null  $deleted_at
 * @method static Builder|Dossier onlyTrashed()
 * @method static Builder|Dossier whereCreatedAt($value)
 * @method static Builder|Dossier whereUpdatedAt($value)
 * @method static Builder|Dossier whereDeletedAt($value)
 * @method static Builder|Dossier whereCreatedBy($value)
 * @method static Builder|Dossier whereId($value)
 * @method static Builder|Dossier whereFileUrl($value)
 * @method static Builder|Dossier whereAction($value)
 * @method static Builder|Dossier whereStatus($value)
 * @method static Builder|Dossier newModelQuery()
 * @method static Builder|Dossier newQuery()
 * @method static Builder|Dossier query()
 * @mixin Eloquent
 */
class Dossier extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}
