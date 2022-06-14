<?php
/**
 * @Author kyhoang
 * @Date   Jun 10, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Job;

/**
 * YaangVu\SisModel\App\Models\JobNoSQL
 *
 * @property int    $id
 * @property string $send_type
 * @property array  $receiver_uuids
 * @property string $template
 * @property array  $ccs
 * @property array  $bccs
 * @property string $status
 * @property string $title
 * @property string $body
 * @property string $attachments_in_base_64
 * @property bool   $html_enabled
 * @property Carbon $completed_at
 * @property Carbon $run_at
 * @property Carbon $created_at
 * @method static Builder|JobNoSQL newModelQuery()
 * @method static Builder|JobNoSQL newQuery()
 * @method static Builder|JobNoSQL query()
 * @method static Builder|JobNoSQL whereSendType($value)
 * @method static Builder|JobNoSQL whereAvailableAt($value)
 * @method static Builder|JobNoSQL whereReceiverUuids($value)
 * @method static Builder|JobNoSQL whereStatus($value)
 * @method static Builder|JobNoSQL whereId($value)
 * @method static Builder|JobNoSQL whereRunAt($value)
 * @method static Builder|JobNoSQL whereCompletedAt($value)
 * @method static Builder|JobNoSQL whereReservedAt($value)
 * @mixin Eloquent
 */
class JobNoSQL extends Model implements Job
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $connection = DbConnectionConstant::NOSQL;
}