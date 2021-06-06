<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\Term;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::factory()->times(50)->create();
    }
}
