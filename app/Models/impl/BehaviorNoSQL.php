<?php

namespace YaangVu\SisModel\App\Models\impl;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Behavior;
use YaangVu\SisModel\App\Models\SQLModel;


class BehaviorNoSQL extends Model implements Behavior
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function term(): BelongsTo
    {
        return (new SQLModel())->belongsTo(TermSQL::class, 'term_id', 'id');
    }

}
