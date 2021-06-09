<?php

namespace YaangVu\SisModel\App\Models;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;

/**
 * YaangVu\SisModel\App\Models\Dossier
 * @property string       $_id
 * @property string       $file_url
 * @property string|null  $action
 * @property string|null  $status
 * @property string|null  $storage_type
 * @property string|null  $path
 * @property string|null  $sc_id
 * @property string|null  $exchange_name
 * @property integer|null $created_by
 * @property Carbon|null  $updated_at
 * @property Carbon|null  $deleted_at
 * @method static \Illuminate\Database\Query\Builder|Dossier onlyTrashed()
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
    use HasFactory;

    protected $fillable
        = [
            'file_url',
            'action',
            'status',
            'storage_type',
            'path',
            CodeConstant::SC_ID,
            'exchange_name'
        ];
}
