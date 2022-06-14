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
 * YaangVu\SisModel\App\Models\JobsNoSQL
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
 * @method static Builder|JobsNoSQL newModelQuery()
 * @method static Builder|JobsNoSQL newQuery()
 * @method static Builder|JobsNoSQL query()
 * @method static Builder|JobsNoSQL whereSendType($value)
 * @method static Builder|JobsNoSQL whereAvailableAt($value)
 * @method static Builder|JobsNoSQL whereReceiverUuids($value)
 * @method static Builder|JobsNoSQL whereStatus($value)
 * @method static Builder|JobsNoSQL whereId($value)
 * @method static Builder|JobsNoSQL whereRunAt($value)
 * @method static Builder|JobsNoSQL whereCompletedAt($value)
 * @method static Builder|JobsNoSQL whereReservedAt($value)
 * @mixin Eloquent
 */
class JobsNoSQL extends Model implements Job
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $connection = DbConnectionConstant::NOSQL;
}