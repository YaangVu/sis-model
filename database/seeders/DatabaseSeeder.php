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
        $this->call([ClassAssignmentSeeder::class, LmsSeeder::class]);
        $this->call([TermSeeder::class]);
        $this->call([DivisionSeeder::class, GradeSeeder::class]);

        // TODO USERS
        // $this->call('UsersTableSeeder');
        $this->call([RoleSeeder::class, PermissionSeeder::class]);
    }
}
