<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ProgressSetting;


class ProgressSettingNoSQL extends Model implements ProgressSetting
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function staff(): \Illuminate\Database\Eloquent\Relations\BelongsTo|BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'staff_id', '_id');
    }
}






