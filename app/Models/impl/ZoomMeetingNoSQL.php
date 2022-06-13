<?php

namespace YaangVu\SisModel\App\Models\impl;

use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\ZoomMeeting;


class ZoomMeetingNoSQL extends Model implements ZoomMeeting
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];

}






