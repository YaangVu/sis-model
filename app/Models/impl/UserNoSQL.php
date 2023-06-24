<?php

namespace YaangVu\SisModel\App\Models\impl;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Relations\hasOne;
use Laravel\Lumen\Auth\Authorizable;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\DbConnectionConstant;
use YaangVu\LaravelAws\S3Service;
use YaangVu\SisModel\App\Models\SQLModel;
use YaangVu\SisModel\App\Models\User;
use YaangVu\SisModel\App\Providers\SchoolServiceProvider;


/**
 * YaangVu\SisModel\App\Models\impl\UserNoSQL
 *
 * @property int                          $id
 * @property string                       $username
 * @property string|null                  $uuid
 * @property int|null                     $grade_id
 * @property int|null                     $division_id
 * @property string                       $full_name
 * @property string                       $first_name
 * @property string                       $email
 * @property string                       $last_name
 * @property string                       $middle_name
 * @property string                       $grade
 * @property string                       $password
 * @property string                       $status
 * @property int|null                     $created_by
 * @property Carbon|null                  $created_at
 * @property Carbon|null                  $updated_at
 * @property Carbon|null                  $deleted_at
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null                $permissions_count
 * @property-read Collection|Role[]       $roles
 * @property-read int|null                $roles_count
 * @method static Builder|UserNoSQL newModelQuery()
 * @method static Builder|UserNoSQL newQuery()
 * @method static Builder|UserNoSQL onlyTrashed()
 * @method static Builder|UserNoSQL permission($permissions)
 * @method static Builder|UserNoSQL query()
 * @method static Builder|UserNoSQL role($roles, $guard = null)
 * @method static Builder|UserNoSQL whereCreatedAt($value)
 * @method static Builder|UserNoSQL whereCreatedBy($value)
 * @method static Builder|UserNoSQL whereDeletedAt($value)
 * @method static Builder|UserNoSQL whereDivisionId($value)
 * @method static Builder|UserNoSQL whereGradeId($value)
 * @method static Builder|UserNoSQL whereId($value)
 * @method static Builder|UserNoSQL whereUpdatedAt($value)
 * @method static Builder|UserNoSQL whereUsername($value)
 * @method static Builder|UserNoSQL withTrashed()
 * @method static Builder|UserNoSQL withoutTrashed()
 * @mixin Eloquent
 * @property string|null                  $external_id
 * @method static Builder|UserNoSQL whereExternalId($value)
 * @property string|null                  $student_code
 * @method static Builder|UserNoSQL whereStudentCode($value)
 * @property string|null                  $staff_code
 * @method static Builder|UserNoSQL whereStaffCode($value)
 * @method static Builder|UserNoSQL whereUuid($value)
 * @property-read UserSQL|null            $userSql
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
    protected $hidden = ['password', 'sync_rocket_chat_at'];

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

    /**
     * AWS Pre Signed a Financial Assistance Programs file
     *
     * @param array|null $value
     *
     * @return array|null
     */
    public function getFinancialAssistanceProgramsAttribute(?array $value): ?array
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

    public function getRoleNamesAttribute(?array $roleNames): array|null
    {
        if (is_array($roleNames)) {
            foreach ($roleNames as $roleName) {
                if (!str_contains($roleName, ':'))
                    continue;

                [$scID, $decorRoleName] = explode(':', $roleName);
                if ($scID == SchoolServiceProvider::$currentSchool?->uuid)
                    $response[] = $decorRoleName;
            }

            return $response ?? $roleNames;
        } else {
            return null;
        }
    }

    /**
     * @param array|null $value
     *
     * @return array|null
     */
    public function getCertificatesAttribute(?array $value): ?array
    {
        if (isset($value) && $value) {
            return $this->_signValueInArray($value, 'src');
        } else {
            return null;
        }
    }

    /**
     * @param array|null $value
     *
     * @return array|null
     */
    public function getMedicalAttribute(?array $value): ?array
    {
        if (isset($value) && $value) {
            return $this->_signValueInArray($value, 'src');
        } else {
            return null;
        }
    }

    public function userSql(): BelongsTo
    {
        return (new SQLModel())->belongsTo(UserSQL::class, CodeConstant::UUID, CodeConstant::UUID)
                               ->whereNull('deleted_at');
    }

    public function getBirthdayAttribute(?string $value): ?string
    {
        if ($value)
            return Carbon::parse($value)->toDateString();

        return null;
    }

    public function getHireDateAttribute(?string $value): ?string
    {
        if ($value)
            return Carbon::parse($value)->toDateString();

        return null;
    }

    public function getReleaseDateAttribute(?string $value): ?string
    {
        if ($value)
            return Carbon::parse($value)->toDateString();

        return null;
    }

    public function getGraduationAttribute(?string $value): ?string
    {
        if ($value)
            return Carbon::parse($value)->toDateString();

        return null;
    }

    public function getEnteredAttribute(?string $value): ?string
    {
        if ($value)
            return Carbon::parse($value)->toDateString();

        return null;
    }

    public function graduatedStudents(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(GraduatedStudentSQL::class, 'user_uuid', 'uuid');
    }

    public function userCreate()
    {
        return (new SQLModel())->belongsTo(UserSQL::class, 'created_by', 'id');
    }

    public function acts(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(ActNoSQL::class, 'student_code', 'student_code');
    }

    public function sbacs(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(SbacNoSQL::class, 'student_code', 'student_code');
    }

    public function physicalPerformance(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(PhysicalPerformanceMeasuresNoSQL::class, 'student_code', 'student_code');
    }

    public function sats(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(SatNoSql::class, 'student_code', 'student_code');
    }

    public function ielts(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(IeltsNoSQL::class, 'student_code', 'student_code');
    }

    public function communicationLogs(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(CommunicationLog::class, 'uuid', 'uuid');
    }

    public function toefl(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(ToeflNoSQL::class, 'student_code', 'student_code');
    }

    public function school(): HasMany|hasOne
    {
        return $this->hasOne(SchoolNoSQL::class, 'uuid', 'sc_id');
    }

    public function progressSettings(): HasMany|\Jenssegers\Mongodb\Relations\HasMany
    {
        return $this->hasMany(ProgressSettingNoSql::class, 'staff_id', 'id');
    }
}
