<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\UserNoSQL;
use YaangVu\SisModel\App\Models\impl\UserSQL;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'username'    => 'yaangvu',
            'uid'         => 'e63e8f1f-2f8c-4c6b-a5d3-f0b80df50c31',
            'email'       => 'sis2@toprate.io',
            'external_id' => null,
        ];

        UserSQL::create($user);
        UserNoSQL::create($user);
    }
}
