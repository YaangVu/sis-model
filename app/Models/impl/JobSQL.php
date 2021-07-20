<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Job;

/**
 * YaangVu\SisModel\App\Models\JobSQL
 *
 * @property int      $id
 * @property string   $queue
 * @property string   $payload
 * @property int      $attempts
 * @property int|null $reserved_at
 * @property int      $available_at
 * @property Carbon   $created_at
 * @method static Builder|JobSQL newModelQuery()
 * @method static Builder|JobSQL newQuery()
 * @method static Builder|JobSQL query()
 * @method static Builder|JobSQL whereAttempts($value)
 * @method static Builder|JobSQL whereAvailableAt($value)
 * @method static Builder|JobSQL whereCreatedAt($value)
 * @method static Builder|JobSQL whereId($value)
 * @method static Builder|JobSQL wherePayload($value)
 * @method static Builder|JobSQL whereQueue($value)
 * @method static Builder|JobSQL whereReservedAt($value)
 * @mixin Eloquent
 */
class JobSQL extends Model implements Job
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::SQL;
}
