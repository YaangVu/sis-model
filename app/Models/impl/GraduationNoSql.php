<?php
/**
 * @Author Admin
 * @Date   Apr 25, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Graduation;

/**
 * Class GraduationNoSql
 * @author  hoangky <hoangky@toprate.io>
 * @mixin Eloquent
 * @property int         $id
 * @property string|null $user_uuid
 * @property string|null $user_id
 * @property string|null $date_first_entered_the_9th_grade
 * @property string|null $diploma_date
 * @property string|null $diploma_type
 * @property string|null $comment
 * @property array|null  $graduation_award_information
 * @property string|null $date_awarded
 * @property string|null $award
 * @property string|null $award_type
 * @property string|null $award_detail
 * @package YaangVu\SisModel\App\Models\impl
 * @category
 */
class GraduationNoSql extends model implements Graduation
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];
}