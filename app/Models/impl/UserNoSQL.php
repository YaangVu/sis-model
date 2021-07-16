<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\LaravelAws\S3Service;
use YaangVu\SisModel\App\Models\User;


/**
 * YaangVu\SisModel\App\Models\impl\UserNoSQL
 *
 * @property int                          $id
 * @property string                       $username
 * @property string|null                  $uuid
 * @property int|null                     $grade_id
 * @property int|null                     $division_id
 * @property int|null                     $created_by
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property Carbon|null                  $deleted_at
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @property-read Collection|Role[]       $roles
 * @property-read int|null                $roles_count
 * @method static Builder|UserSQL newModelQuery()
 * @method static Builder|UserSQL newQuery()
 * @method static Builder|UserSQL onlyTrashed()
 * @method static Builder|UserSQL permission($permissions)
 * @method static Builder|UserSQL query()
 * @method static Builder|UserSQL role($roles, $guard = null)
 * @method static Builder|UserSQL whereCreatedAt($value)
 * @method static Builder|UserSQL whereCreatedBy($value)
 * @method static Builder|UserSQL whereDeletedAt($value)
 * @method static Builder|UserSQL whereDivisionId($value)
 * @method static Builder|UserSQL whereGradeId($value)
 * @method static Builder|UserSQL whereId($value)
 * @method static Builder|UserSQL whereUpdatedAt($value)
 * @method static Builder|UserSQL whereUsername($value)
 * @method static Builder|UserSQL withTrashed()
 * @method static Builder|UserSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null                  $external_id
 * @method static Builder|UserSQL whereExternalId($value)
 * @method static Builder|UserSQL whereUuid($value)
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
