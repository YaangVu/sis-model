<?php


namespace YaangVu\SisModel\Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use YaangVu\SisModel\App\Imports\PermissionImport;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = resource_path('Permission.xlsx');

        $file = File::get($path);
        if (isset($file)) {
            DB::table('permissions')->delete();
            DB::table('role_has_permissions')->delete();
            Excel::import(new PermissionImport(), $path);
        }
    }
}
