<?php


namespace YaangVu\SisModel\App\Models\impl;


use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Notification;

class NotificationNoSQL extends Model implements Notification
{
    protected $table = self::table;

    protected $fillable = ['*'];

    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string
     */
    public string $code = CodeConstant::UUID;

    protected $connection = DbConnectionConstant::NOSQL;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserNoSQL::class, 'user_id_to', '_id');
    }
}