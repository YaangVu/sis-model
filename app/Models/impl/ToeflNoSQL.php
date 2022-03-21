<?php
/**
 * @Author Pham Van Tien
 * @Date   Mar 21, 2022
 */

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\MongoModel;
use YaangVu\SisModel\App\Models\Toefl;

/**
 * @property int         $id
 * @property string      $uuid
 * @property string      $student_code
 * @property string      $test_name
 * @property string      $school_uuid
 * @property string      $test_date
 * @property string|null $total_score
 * @property string|null $listening
 * @property string|null $reading
 * @property string|null $speaking
 * @property string|null $writing
 * @property Carbon|null $created_at
 * @property Carbon|null $created_by
 * @property Carbon|null $updated_at
 * @method static Builder|ToeflNoSql newModelQuery()
 * @method static Builder|ToeflNoSql newQuery()
 * @method static Builder|ToeflNoSql query()
 * @method static Builder|ToeflNoSql whereCreatedAt($value)
 * @method static Builder|ToeflNoSql whereCreatedBy($value)
 * @method static Builder|ToeflNoSql whereStudentCode($value)
 * @method static Builder|ToeflNoSql whereUuid($value)
 * @method static Builder|ToeflNoSql whereTestName($value)
 * @method static Builder|ToeflNoSql whereSchoolUuid($value)
 * @method static Builder|ToeflNoSql whereId($value)
 * @method static Builder|ToeflNoSql whereTotalScore($value)
 * @method static Builder|ToeflNoSql whereSpeaking($value)
 * @method static Builder|ToeflNoSql whereWriting($value)
 * @method static Builder|ToeflNoSql whereListening($value)
 * @mixin Eloquent
 */
class ToeflNoSQL extends MongoModel implements Toefl
{
    protected $table = self::table;

    protected $connection = DbConnectionConstant::NOSQL;

    protected $fillable = ['*'];

    protected $guarded = [];
}