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

        // TODO SCHOOL
        $this->call([SchoolSeeder::class, LmsSeeder::class]);
       // $this->call([TermSeeder::class]);
        $this->call([GradeSeeder::class]);

        // TODO USERS
       $this->call([RoleSeeder::class, PermissionSeeder::class]);
         $this->call(ProgressBehavior::class);
    }
}
