<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Relations\BelongsTo as MBelongTo;
use YaangVu\Constant\DbConnectionConstant;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\LaravelAws\S3Service;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\TranscriptHistory;

class TranscriptHistoryNoSQL extends Model implements TranscriptHistory
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

    protected S3Service $S3Service;

    public function studentNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'student_id', '_id')
                                 ->whereNull('deleted_at');
    }

    public function downloaderNoSql(): MBelongTo
    {
        return (new MongoModel())->belongsTo(UserNoSQL::class, 'downloader_id', '_id')
                                 ->whereNull('deleted_at');
    }

    /**
     * AWS Pre Signed a url avatar
     *
     * @param string|null $value
     *
     * @return string|null
     */
    public function getLinkFileAttribute(?string $value): ?string
    {
        if (isset($value) && $value) {
            $this->S3Service = new S3Service();

            return $this->S3Service->createPresigned($value);
        } else {
            return null;
        }
    }
}
