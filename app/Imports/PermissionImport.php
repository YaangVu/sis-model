<?php

namespace YaangVu\SisModel\App\Imports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Spatie\Permission\Models\Permission;
use YaangVu\Constant\RoleConstant;
use YaangVu\SisModel\App\Models\impl\RoleSQL;

class PermissionImport implements ToArray, SkipsEmptyRows, WithHeadingRow
{
    public function array(array $array)
    {
        $schoolCode          = 'igs';
        $god                 = RoleSQL::whereName($schoolCode . ':' . RoleConstant::ADMIN)->first();
        $academicCoordinator = RoleSQL::whereName($schoolCode . ':' . RoleConstant::ACADEMIC_COORDINATOR)->first();
        $teacher             = RoleSQL::whereName($schoolCode . ':' . RoleConstant::TEACHER)->first();
        $headTeacher         = RoleSQL::whereName($schoolCode . ':' . RoleConstant::HEADTEACHER)->first();
        $principal           = RoleSQL::whereName($schoolCode . ':' . RoleConstant::PRINCIPAL)->first();
        $student             = RoleSQL::whereName($schoolCode . ':' . RoleConstant::STUDENT)->first();
        $family              = RoleSQL::whereName($schoolCode . ':' . RoleConstant::FAMILY)->first();
        $counselor           = RoleSQL::whereName($schoolCode . ':' . RoleConstant::COUNSELOR)->first();
        foreach ($array as $permissions) {
            $permission             = new Permission();
            $permission->name       = str_replace('_', ':', $permissions['permissions']);
            $permission->guard_name = 'api';
            $permission->save();
            foreach ($permissions as $key => $item) {
                if ($item == null || $key == 'permissions' || $key == 'admin')
                    continue;

                switch ($key) {
                    case $this->formatSrt(RoleConstant::STUDENT) :
                        $student->givePermissionTo($permission);
                        break;
                    case $this->formatSrt(RoleConstant::FAMILY) :
                        $family->givePermissionTo($permission);
                        break;
                    case $this->formatSrt(RoleConstant::COUNSELOR) :
                        $counselor->givePermissionTo($permission);
                        break;
                    case $this->formatSrt(RoleConstant::TEACHER) :
                        $teacher->givePermissionTo($permission);
                        break;
                    case  $this->formatSrt(RoleConstant::HEADTEACHER) :
                        $headTeacher->givePermissionTo($permission);
                        break;
                    case $this->formatSrt(RoleConstant::PRINCIPAL) :
                        $principal->givePermissionTo($permission);
                        break;
                    case $this->formatSrt(RoleConstant::ACADEMIC_COORDINATOR):
                        $academicCoordinator->givePermissionTo($permission);
                        break;
                }
            }
        }
    }

    private function formatSrt(string $str): array|string
    {
        return str_replace(' ', '_', strtolower($str));
    }
}
