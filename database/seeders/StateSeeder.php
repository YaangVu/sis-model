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
                                        ['name' => 'Alabama', 'code' => 'AL', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Alaska', 'code' => 'AK', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'Arizona', 'code' => 'AZ', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Arkansas', 'code' => 'AR', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'California', 'code' => 'CA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                       ->toDateTimeString()],
                                        ['name' => 'Colorado', 'code' => 'CO', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Connecticut', 'code' => 'CT', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                        ->toDateTimeString()],
                                        ['name' => 'Delaware', 'code' => 'DE', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Florida', 'code' => 'FL', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Georgia', 'code' => 'GA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Hawaii', 'code' => 'HI', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'Idaho', 'code' => 'ID', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'Illinois', 'code' => 'IL', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Indiana', 'code' => 'IN', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Iowa', 'code' => 'IA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Kansas', 'code' => 'KS', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'Kentucky', 'code' => 'KY', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Louisiana', 'code' => 'LA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                      ->toDateTimeString()],
                                        ['name' => 'Maine', 'code' => 'ME', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'Maryland', 'code' => 'MD', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Massachusetts', 'code' => 'MA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'Michigan', 'code' => 'MI', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Minnesota', 'code' => 'MN', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                      ->toDateTimeString()],
                                        ['name' => 'Mississippi', 'code' => 'MS', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                        ->toDateTimeString()],
                                        ['name' => 'Missouri', 'code' => 'MO', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Montana', 'code' => 'MT', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Nebraska', 'code' => 'NE', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Nevada', 'code' => 'NV', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'New Hampshire', 'code' => 'NH', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'New Jersey', 'code' => 'NJ', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                       ->toDateTimeString()],
                                        ['name' => 'New Mexico', 'code' => 'NM', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                       ->toDateTimeString()],
                                        ['name' => 'New York', 'code' => 'NY', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'North Carolina', 'code' => 'NC', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'North Dakota', 'code' => 'ND', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Ohio', 'code' => 'OH', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Oklahoma', 'code' => 'OK', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Oregon', 'code' => 'OR', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                   ->toDateTimeString()],
                                        ['name' => 'Pennsylvania', 'code' => 'PA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Rhode Island', 'code' => 'RI', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'South Carolina', 'code' => 'SC', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                           ->toDateTimeString()],
                                        ['name' => 'South Dakota', 'code' => 'SD', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                         ->toDateTimeString()],
                                        ['name' => 'Tennessee', 'code' => 'TN', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                      ->toDateTimeString()],
                                        ['name' => 'Texas', 'code' => 'TX', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                  ->toDateTimeString()],
                                        ['name' => 'Utah', 'code' => 'UT', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                 ->toDateTimeString()],
                                        ['name' => 'Vermont', 'code' => 'VT', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Virginia', 'code' => 'VA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                        ['name' => 'Washington', 'code' => 'WA', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                       ->toDateTimeString()],
                                        ['name' => 'West Virginia', 'code' => 'WV', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                          ->toDateTimeString()],
                                        ['name' => 'Wisconsin', 'code' => 'WI', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                      ->toDateTimeString()],
                                        ['name' => 'Wyoming', 'code' => 'WY', 'country_code' => 'US', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                    ->toDateTimeString()],
                                        ['name' => 'Viet Nam', 'code' => 'VN', 'country_code' => 'VN', 'uuid' => Uuid::uuid(), 'created_at' => Carbon::now()
                                                                                                                                                     ->toDateTimeString()],
                                    ]);

    }

}