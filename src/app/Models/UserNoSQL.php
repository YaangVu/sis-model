<?php

namespace App\Models;

use App\Models\User;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Jenssegers\Mongodb\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use YaangVu\Constant\CodeConstant;
use YaangVu\LaravelAws\S3Service;


/**
 * App\Models\impl\UserNoSQL
 *
 * @property int         $id
 * @property string      $username
 * @property string      $email
 * @property string|null $uid
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|UserNoSQL newModelQuery()
 * @method static Builder|UserNoSQL newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserNoSQL onlyTrashed()
 * @method static Builder|UserNoSQL query()
 * @method static Builder|UserNoSQL whereCreatedAt($value)
 * @method static Builder|UserNoSQL whereDeletedAt($value)
 * @method static Builder|UserNoSQL whereId($value)
 * @method static Builder|UserNoSQL whereUid($value)
 * @method static Builder|UserNoSQL whereUpdatedAt($value)
 * @method static Builder|UserNoSQL whereUsername($value)
 * @method static Builder|UserNoSQL whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|UserNoSQL withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserNoSQL withoutTrashed()
 * @mixin Eloquent
 */
class UserNoSQL extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory, SoftDeletes;

    protected $connection = 'mongodb';

    public string $code = CodeConstant::UID;

    protected $fillable = ['*'];

    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'uid'];

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
            return URL::asset('avatar.png');
        }
    }
}
