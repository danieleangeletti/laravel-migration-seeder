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
        $train = new Train();
        $train->company = "Deutsche Bahn";
        $train->date = $today;
        $train->departure_station = "Innsbruck";
        $train->arrival_station = "Kitzbühel";
        $train->departure_time = "18:15:00";
        $train->arrival_time = "19:15:00";
        $train->train_code = "19022";
        $train->in_time = true;
        $train->cancelled = false;
        $train->save();
    }
}
