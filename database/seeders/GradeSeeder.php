<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\GradeSQL;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = ['PK', 'PS', 'K', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
        foreach ($value as $v) {
            $division            = new GradeSQL();
            $division->name      = $v;
            $division->school_id = 1;
            $division->save();
        }
    }
}
