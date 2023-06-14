<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use YaangVu\SisModel\App\Models\impl\CityNoSQL;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = __DIR__ . '/data/danh-sach-cap-tinh.json';
        $cities   = file_get_contents($filename);
        $data     = [];
        foreach (json_decode($cities) as $city) {
            $data[] = [
                'name'             => $city->name,
                'country_two_code' => 'VN',
            ];
        }

        CityNoSQL::query()->insert($data);
    }
}
