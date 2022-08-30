<?php

namespace Database\Seeders;

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
        $this->call([
            DeparmentSeeder::class,
            CitySeeder::class,
            BuilderSeeder::class,
            CategorySeeder::class
        ]);
    }
}
