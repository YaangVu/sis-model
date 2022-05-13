<?php
/**
 * @Author Edogawa Conan
 * @Date   May 13, 2022
 */

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\ProgressBehaviorNoSql;

class ProgressBehavior extends Seeder
{
    public function run()
    {
        ProgressBehaviorNoSql::query()->insert([
                                                   ['name' => 'Responsible', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Honest', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Confident/Takes Risks', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Attentive/Listens', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Demonstrates Readiness to Learn', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Positive Attitude', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Shows Emotional/Self-Control', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Puts Forth Best Effort', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Quality of Classwork/Homework', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Works Well Independently', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Works Well in Groups', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Demonstrates Organizational Skills', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Demonstrates Safety Awareness', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Follows Class/School Rules', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString()],
                                                   ['name' => 'Speaks English Consistently', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()->toDateTimeString(),]
                                                   ]);

    }

}