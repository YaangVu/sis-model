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
            ['name' => RoleConstant::ADMIN, 'group' => RoleConstant::STAFF,'priority' => 2 ,'is_mutable' => false],
            ['name' => RoleConstant::TEACHER, 'group' => RoleConstant::STAFF,'priority' => 5,'is_mutable' => false],
            ['name' => RoleConstant::PRINCIPAL, 'group' => RoleConstant::STAFF,'priority' => 2,'is_mutable' => false],

            ['name' => RoleConstant::STUDENT, 'group' => RoleConstant::STUDENT_AND_FAMILY,'priority' => 13,'is_mutable' => false],
            ['name' => RoleConstant::FAMILY, 'group' => RoleConstant::STUDENT_AND_FAMILY, 'priority' => 13,'is_mutable' => false],
            ['name' => RoleConstant::COUNSELOR, 'group' => RoleConstant::STAFF,'priority' => 8,'is_mutable' => false],
 
        ];
        foreach ($schools as $school) {
            foreach ($roles as $role) {
                $data[] = [
                    'name'       => $school->uuid . ':' . $role['name'],
                    'group'      => $role['group'],
                    'guard_name' => 'api',
                    'priority' => $role['priority'] ?? null
                ];
            }
        }

        if ($data)
            Role::insert($data);

        $god             = new Role();
        $god->name       = RoleConstant::GOD;
        $god->guard_name = 'api';
        $god->priority = 1 ;
        $god->save();
    }
}
