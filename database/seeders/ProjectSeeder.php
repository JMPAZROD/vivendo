<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name'          => 'Casas y casas',
            'description'   => 'Proyecto de vivienda',
            'city_id'       => 3,
            'builder_id'    => 1,
            'category_id'   => 1,
            'address'       => 'Calle 9a',
            'num_rooms'     => 3,
            'num_bathrooms' => 2,
            'price'         => 80000000
        ]);

        Project::create([
            'name'          => 'Apartamentos y casas',
            'description'   => 'Proyecto de vivienda',
            'city_id'       => 1,
            'builder_id'    => 2,
            'category_id'   => 2,
            'address'       => 'Cra 1',
            'num_rooms'     => 2,
            'num_bathrooms' => 1,
            'price'         => 100000000
        ]);
    }
}
