<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\Issue;

/**
 * YaangVu\SisModel\App\Models\impl\IssueSQL
 *
 * @property int         $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string      $assignee uuid of assignee
 * @property string      $summary
 * @property string|null $description
 * @property string|null $tags
 * @property string|null $due_date
 * @method static Builder|IssueSQL newModelQuery()
 * @method static Builder|IssueSQL newQuery()
 * @method static Builder|IssueSQL query()
 * @method static Builder|IssueSQL whereAssignee($value)
 * @method static Builder|IssueSQL whereCreatedAt($value)
 * @method static Builder|IssueSQL whereDescription($value)
 * @method static Builder|IssueSQL whereDueDate($value)
 * @method static Builder|IssueSQL whereId($value)
 * @method static Builder|IssueSQL whereSummary($value)
 * @method static Builder|IssueSQL whereTags($value)
 * @method static Builder|IssueSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class IssueNoSQL extends Model implements Issue
{
    public $table = self::table;
}
