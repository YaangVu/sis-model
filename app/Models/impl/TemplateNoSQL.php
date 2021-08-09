<?php


namespace YaangVu\SisModel\App\Models\impl;


use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\LaravelAws\S3Service;
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
 * @method static Builder|TemplateNoSQL newModelQuery()
 * @method static Builder|TemplateNoSQL newQuery()
 * @method static Builder|TemplateNoSQL query()
 * @method static Builder|TemplateNoSQL whereCreatedAt($value)
 * @method static Builder|TemplateNoSQL whereCreatedBy($value)
 * @method static Builder|TemplateNoSQL whereType($value)
 * @method static Builder|TemplateNoSQL whereUuid($value)
 * @method static Builder|TemplateNoSQL whereTitle($value)
 * @method static Builder|TemplateNoSQL whereExternalId($value)
 * @method static Builder|TemplateNoSQL whereId($value)
 * @method static Builder|TemplateNoSQL whereName($value)
 * @method static Builder|TemplateNoSQL whereSchoolId($value)
 * @method static Builder|TemplateNoSQL whereUpdatedAt($value)
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

    /**
     * @var mixed|S3Service
     */
    private mixed $S3Service;

    /**
     * @param array|null $value
     *
     * @return array|null
     */
    public function getAttachmentsAttribute(?array $value): ?array
    {
        if (isset($value) && $value) {
            return $this->_signValueInArray($value, 'src');
        } else {
            return null;
        }
    }

    private function _signValueInArray(array $array, string $value): array
    {
        $this->S3Service = new S3Service();
        foreach ($array as $k => $v) {
            if (isset($v[$value]) && $v[$value]) {
                $array[$k][$value] = $this->S3Service->createPresigned($v[$value]);
            }
        }

        return $array;
    }
}