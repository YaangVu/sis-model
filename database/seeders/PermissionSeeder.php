<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Spatie\Permission\Models\Permission;
use YaangVu\Constant\CodeConstant;
use YaangVu\Constant\RoleConstant;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = resource_path('Permissions.csv');
        if (isset($file)) {
            $spreadsheet = IOFactory::load($file);
            $sheet       = $spreadsheet->getActiveSheet();

            // Store data from the activeSheet to the variable in the form of Array
            $sheetToArray = [1, $sheet->toArray(null, true, true, false)];
            $arrRole      = $sheetToArray[1][0];

            foreach ($sheetToArray[1] as $k => $v) {
                if ($k < 1) continue;
                $permission
                       = Permission::create(['name' => $v[0], CodeConstant::SC_ID => RoleConstant::DEFAULT_ROLE, 'guard_name' => 'api']);
                $ticks = array_keys($v, "1");
                if ($ticks) {
                    foreach ($ticks as $tick) {
                        $permission->assignRole(trim($arrRole[$tick]));
                    }
                }
            }
        }
    }
}
