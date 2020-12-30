<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Data::create([
                'email' => $faker->email,
                'ip' => $faker->randomFloat(),
                'source_id' => $faker->randomDigit,
                'tracking_id' => $faker->randomAscii,
                'time_stamp' => $faker->dateTime
            ]);
        }
    }
}
