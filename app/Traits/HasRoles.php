<?php


namespace YaangVu\SisModel\App\Traits;


use Spatie\Permission\Contracts\Role;
use function is_string;

trait HasRoles
{
    use \Spatie\Permission\Traits\HasRoles;

    public static string $guardName;

    protected function getStoredRole($role): Role
    {
        $roleClass = $this->getRoleClass();
        $guardName = self::$guardName ?? $this->getDefaultGuardName();

        if (is_numeric($role)) {
            return $roleClass->findById($role, $guardName);
        }

        if (is_string($role)) {
            return $roleClass->findByName($role, $guardName);
        }

        return $role;
    }

    public static function setGuardName($guardName)
    {
        self::$guardName = $guardName;
    }

}
