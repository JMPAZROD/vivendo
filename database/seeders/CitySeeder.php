<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** VALLE DEL CAUCA */
        City::create([
            'name'  => 'Cali',
            'deparment_id' => 1
        ]);

        City::create([
            'name'  => 'Buenaventura',
            'deparment_id' => 1
        ]);

        City::create([
            'name'  => 'Jamundí',
            'deparment_id' => 1
        ]);

        City::create([
            'name'  => 'Buga',
            'deparment_id' => 1
        ]);

        City::create([
            'name'  => 'Candelaria',
            'deparment_id' => 1
        ]);

        City::create([
            'name'  => 'Palmira',
            'deparment_id' => 1
        ]);

        /** CAUCA */
        City::create([
            'name'  => 'Popayán',
            'deparment_id' => 2
        ]);

        City::create([
            'name'  => 'Caloto',
            'deparment_id' => 2
        ]);

        City::create([
            'name'  => 'Corinto',
            'deparment_id' => 2
        ]);

        City::create([
            'name'  => 'Santander de Quilichao',
            'deparment_id' => 2
        ]);
    }
}
