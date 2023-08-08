<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            DB::table('tours')->insert([
                'tour_name' => $faker->sentence(1),
                'destination' => $faker->country,
                'duration' => $faker->numberBetween(1, 10),
                'price' => $faker->randomFloat(2, 100, 5000),
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(640, 480, 'tour', true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
