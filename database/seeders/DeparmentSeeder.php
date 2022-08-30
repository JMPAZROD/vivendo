<?php

namespace Database\Seeders;

use App\Models\Deparment;
use Illuminate\Database\Seeder;

class DeparmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deparment::create([
            'name'  => 'Valle del cauca'
        ]);

        Deparment::create([
            'name'  => 'Cauca'
        ]);
    }
}
