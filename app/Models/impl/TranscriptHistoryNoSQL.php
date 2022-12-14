<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Relations\BelongsTo as MBelongTo;
use YaangVu\Constant\DbConnectionConstant;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\TranscriptHistory;

class TranscriptHistoryNoSQL extends Model implements TranscriptHistory
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    public function userNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'user_id', '_id')
                                 ->whereNull('deleted_at');
    }
}
