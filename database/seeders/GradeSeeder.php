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
        $value = ['PS', 'PK', 'K', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
        foreach ($value as $k => $v) {
            $division            = new GradeSQL();
            $division->name      = $v;
            $division->index     = $k + 1;
            $division->school_id = 2;
            $division->save();
        }
    }
}
