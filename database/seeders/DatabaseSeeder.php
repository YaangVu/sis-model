<?php

namespace YaangVu\SisModel\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO USERS
        // $this->call('UsersTableSeeder');
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);

        // TODO SCHOOL
        $this->call([SchoolSeeder::class]);
        $this->call([TermSeeder::class]);
        $this->call([DivisionSeeder::class, GradeSeeder::class]);
    }
}
