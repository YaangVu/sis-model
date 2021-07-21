<?php


namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\SisModel\App\Models\Template;

/**
 * YaangVu\SisModel\App\Models\TemplateNoSQL
 *
 * @property int         $id
 * @property string|null $uuid TemplateSQL id
 * @property string|null $external_id
 * @property string|null $school_id
 * @property string      $name
 * @property string      $type
 * @property string|null $title
 * @property Carbon|null $created_at
 * @property Carbon|null $created_by
 * @property Carbon|null $updated_at
 * @method static Builder|SubjectSQL newModelQuery()
 * @method static Builder|SubjectSQL newQuery()
 * @method static Builder|SubjectSQL query()
 * @method static Builder|SubjectSQL whereCreatedAt($value)
 * @method static Builder|SubjectSQL whereCreatedBy($value)
 * @method static Builder|SubjectSQL whereType($value)
 * @method static Builder|SubjectSQL whereUuid($value)
 * @method static Builder|SubjectSQL whereTitle($value)
 * @method static Builder|SubjectSQL whereExternalId($value)
 * @method static Builder|SubjectSQL whereId($value)
 * @method static Builder|SubjectSQL whereName($value)
 * @method static Builder|SubjectSQL whereSchoolId($value)
 * @method static Builder|SubjectSQL whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TemplateNoSQL extends Model implements Template
{
    use  HasFactory;

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
}