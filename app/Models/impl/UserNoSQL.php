<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\LaravelAws\S3Service;
use YaangVu\SisModel\App\Models\User;


/**
 * YaangVu\SisModel\App\Models\impl\UserNoSQL
 *
 * @property int         $id
 * @property string      $username
 * @property string      $email
 * @property string|null $uuid
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|UserNoSQL newModelQuery()
 * @method static Builder|UserNoSQL newQuery()
 * @method static Builder|UserNoSQL onlyTrashed()
 * @method static Builder|UserNoSQL query()
 * @method static Builder|UserNoSQL whereCreatedAt($value)
 * @method static Builder|UserNoSQL whereDeletedAt($value)
 * @method static Builder|UserNoSQL whereId($value)
 * @method static Builder|UserNoSQL whereUpdatedAt($value)
 * @method static Builder|UserNoSQL whereUsername($value)
 * @method static Builder|UserNoSQL whereEmail($value)
 * @method static Builder|UserNoSQL withTrashed()
 * @method static Builder|UserNoSQL withoutTrashed()
 * @mixin Eloquent
 */
class UserNoSQL extends Model implements User
{
    use Authenticatable, Authorizable, HasFactory, SoftDeletes;

    protected $connection = DbConnectionConstant::NOSQL;

    public string $code = CodeConstant::UUID;

    protected $fillable = ['*'];

    protected $table = self::table;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'uuid'];

    protected $guarded = [];

    protected S3Service $S3Service;

    /**
     * AWS Pre Signed a url avatar
     *
     * @param string|null $value
     *
     * @return string|null
     */
    public function getAvatarUrlAttribute(?string $value): ?string
    {
        if (isset($value) && $value) {
            $this->S3Service = new S3Service();

            return $this->S3Service->createPresigned($value);
        } else {
            return null;
        }
    }
}
