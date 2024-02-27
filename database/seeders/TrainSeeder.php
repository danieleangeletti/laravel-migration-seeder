<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        $today = date("Y-m-d");

        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->company = fake()->words(2, true);
            $train->date = $today;
            $train->departure_station = fake()->words(1, true);
            $train->arrival_station = fake()->words(1, true);
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_code = fake()->words(1, true);
            $train->in_time = fake()->numberBetween(0, 1);
            $train->cancelled = fake()->numberBetween(0, 1);
            $train->save();
        }

        for ($i = 0; $i < 35; $i++) {
            $train = new Train();
            $train->company = fake()->words(2, true);
            $train->date = fake()->date;
            $train->departure_station = fake()->words(1, true);
            $train->arrival_station = fake()->words(1, true);
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_code = fake()->words(1, true);
            $train->in_time = fake()->numberBetween(0, 1);
            $train->cancelled = fake()->numberBetween(0, 1);
            $train->save();
        }
    }
}
