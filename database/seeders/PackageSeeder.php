<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('packages')->insert([
                'package_name' => $faker->sentence(1),
                'description' => $faker->paragraph(3),
                'price' => $faker->randomFloat(2, 100, 5000),
                'date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                'num_person' => $faker->numberBetween(1, 10),
                'destination' => $faker->city,
                'duration' => $faker->numberBetween(1, 10),
                'image' => $faker->imageUrl(640, 480, 'package', true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
