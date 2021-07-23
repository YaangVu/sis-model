<?php


namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Dossier;

/**
 * YaangVu\SisModel\App\Models\DossierNoSQL
 *
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
 * @method static Builder|DossierNoSQL onlyTrashed()
 * @method static Builder|DossierNoSQL whereCreatedAt($value)
 * @method static Builder|DossierNoSQL whereUpdatedAt($value)
 * @method static Builder|DossierNoSQL whereDeletedAt($value)
 * @method static Builder|DossierNoSQL whereCreatedBy($value)
 * @method static Builder|DossierNoSQL whereId($value)
 * @method static Builder|DossierNoSQL whereFileUrl($value)
 * @method static Builder|DossierNoSQL whereAction($value)
 * @method static Builder|DossierNoSQL whereStatus($value)
 * @method static Builder|DossierNoSQL newModelQuery()
 * @method static Builder|DossierNoSQL newQuery()
 * @method static Builder|DossierNoSQL query()
 * @mixin Eloquent
 */
class DossierNoSQL extends Model implements Dossier
{
    use SoftDeletes, HasFactory;

    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}
