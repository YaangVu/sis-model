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
 * @property string      $_id
 * @property string      $file_url
 * @property string|null $action
 * @property Carbon|null $status
 * @property Carbon|null $created_by
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Illuminate\Database\Query\Builder|Import onlyTrashed()
 * @method static Builder|Import whereCreatedAt($value)
 * @method static Builder|Import whereUpdatedAt($value)
 * @method static Builder|Import whereDeletedAt($value)
 * @method static Builder|Import whereCreatedBy($value)
 * @method static Builder|Import whereId($value)
 * @method static Builder|Import whereFileUrl($value)
 * @method static Builder|Import whereAction($value)
 * @method static Builder|Import whereStatus($value)
 * @method static Builder|Import newModelQuery()
 * @method static Builder|Import newQuery()
 * @method static Builder|Import query()
 * @mixin Eloquent
 */
class Dossier extends Model
{
    use HasFactory;

    protected $fillable = ['file_url', 'action', 'status', 'storage_type', 'path', 'file_url', CodeConstant::SC_ID, 'exchange_name'];
}
