<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\City::factory(50)->create();
         \App\Models\Airlines::factory(25)->create();
         \App\Models\Flight::factory(250)->create();
         \App\Models\CityFlight::factory(1000)->create();
         \App\Models\Passenger::factory(10000)->create();
    }
}
