<?php


namespace YaangVu\SisModel\Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use YaangVu\Constant\RoleConstant;
use YaangVu\SisModel\App\Models\impl\SchoolSQL;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data    = [];
        $schools = SchoolSQL::all();
        $roles   = [
            ['name' => RoleConstant::ADMIN, 'group' => RoleConstant::STAFF,'priority' => 2],
            ['name' => RoleConstant::TEACHING_ASSISTANT, 'group' => RoleConstant::STAFF,],
            ['name' => RoleConstant::TEACHER, 'group' => RoleConstant::STAFF,'priority' => 5],
            ['name' => RoleConstant::HEADTEACHER, 'group' => RoleConstant::STAFF],
            ['name' => RoleConstant::PRINCIPAL, 'group' => RoleConstant::STAFF],
            ['name' => RoleConstant::ACADEMIC_COORDINATOR, 'group' => RoleConstant::STAFF],
            ['name' => RoleConstant::STUDENT, 'group' => RoleConstant::STUDENT_AND_FAMILY,'priority' => 13],
            ['name' => RoleConstant::FAMILY, 'group' => RoleConstant::STUDENT_AND_FAMILY, 'priority' => 13],
            ['name' => RoleConstant::COUNSELOR, 'group' => RoleConstant::STAFF,'priority' => 8],
            ['name' => RoleConstant::GOD, 'group' => null,'priority' => 1],
        ];
        foreach ($schools as $school) {
            foreach ($roles as $role) {
                $data[] = [
                    'name'       => $school->uuid . ':' . $role['name'],
                    'group'      => $role['group'],
                    'guard_name' => 'api'
                ];
            }
        }

        if ($data)
            Role::insert($data);
    }
}
