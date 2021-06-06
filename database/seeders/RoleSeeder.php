<?php


namespace YaangVu\SisModel\Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\RoleConstant;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sc_id = RoleConstant::DEFAULT_ROLE;
        $group = RoleConstant::STAFF;
        $roles = [
            ['name' => RoleConstant::ADMIN, 'group' => $group],
            ['name' => RoleConstant::TEACHING_ASSISTANT, 'group' => $group],
            ['name' => RoleConstant::TEACHER, 'group' => $group],
            ['name' => RoleConstant::HEADTEACHER, 'group' => $group],
            ['name' => RoleConstant::PRINCIPAL, 'group' => $group],
            ['name' => RoleConstant::ACADEMIC_COORDINATOR, 'group' => $group],
            ['name' => RoleConstant::STUDENT, 'group' => RoleConstant::STUDENT_AND_FAMILY],
            ['name' => RoleConstant::FAMILY, 'group' => RoleConstant::STUDENT_AND_FAMILY],
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role['name'], CodeConstant::SC_ID => $sc_id, 'group' => $role['group'], 'guard_name' => 'api']);
        }
    }
}
