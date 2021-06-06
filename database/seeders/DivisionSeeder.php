<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value
            = ['1', '2', '3', '4', '5', "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O",
               "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        foreach ($value as $v) {
            $division            = new Division();
            $division->name      = $v;
            $division->school_id = 1;
            $division->save();
        }
    }
}
