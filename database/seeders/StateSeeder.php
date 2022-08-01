<?php
/**
 * @Author Edogawa Conan
 * @Date   May 13, 2022
 */

namespace YaangVu\SisModel\Database\Seeders;

use Carbon\Carbon;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\StateNoSQL;

class StateSeeder extends Seeder
{
    public function run()
    {
        StateNoSQL::query()->insert([
                                        ['name' => 'Alabama', 'code' => 'AL', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Alaska', 'code' => 'AK', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'Arizona', 'code' => 'AZ', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Arkansas', 'code' => 'AR', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'California', 'code' => 'CA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                               ->toDateTimeString()],
                                        ['name' => 'Colorado', 'code' => 'CO', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Connecticut', 'code' => 'CT', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                ->toDateTimeString()],
                                        ['name' => 'Delaware', 'code' => 'DE', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Florida', 'code' => 'FL', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Georgia', 'code' => 'GA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Hawaii', 'code' => 'HI', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'Idaho', 'code' => 'ID', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'Illinois', 'code' => 'IL', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Indiana', 'code' => 'IN', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Iowa', 'code' => 'IA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Kansas', 'code' => 'KS', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'Kentucky', 'code' => 'KY', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Louisiana', 'code' => 'LA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                              ->toDateTimeString()],
                                        ['name' => 'Maine', 'code' => 'ME', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'Maryland', 'code' => 'MD', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Massachusetts', 'code' => 'MA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'Michigan', 'code' => 'MI', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Minnesota', 'code' => 'MN', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                              ->toDateTimeString()],
                                        ['name' => 'Mississippi', 'code' => 'MS', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                ->toDateTimeString()],
                                        ['name' => 'Missouri', 'code' => 'MO', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Montana', 'code' => 'MT', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Nebraska', 'code' => 'NE', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Nevada', 'code' => 'NV', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'New Hampshire', 'code' => 'NH', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'New Jersey', 'code' => 'NJ', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                               ->toDateTimeString()],
                                        ['name' => 'New Mexico', 'code' => 'NM', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                               ->toDateTimeString()],
                                        ['name' => 'New York', 'code' => 'NY', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'North Carolina', 'code' => 'NC', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'North Dakota', 'code' => 'ND', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Ohio', 'code' => 'OH', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Oklahoma', 'code' => 'OK', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Oregon', 'code' => 'OR', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'Pennsylvania', 'code' => 'PA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Rhode Island', 'code' => 'RI', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'South Carolina', 'code' => 'SC', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'South Dakota', 'code' => 'SD', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Tennessee', 'code' => 'TN', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                              ->toDateTimeString()],
                                        ['name' => 'Texas', 'code' => 'TX', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'Utah', 'code' => 'UT', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Vermont', 'code' => 'VT', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                        ['name' => 'Virginia', 'code' => 'VA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                             ->toDateTimeString()],
                                        ['name' => 'Washington', 'code' => 'WA', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                               ->toDateTimeString()],
                                        ['name' => 'West Virginia', 'code' => 'WV', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'Wisconsin', 'code' => 'WI', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                              ->toDateTimeString()],
                                        ['name' => 'Wyoming', 'code' => 'WY', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                            ->toDateTimeString()],
                                    ]);

    }

}