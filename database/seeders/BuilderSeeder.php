<?php

namespace Database\Seeders;

use App\Models\Builder;
use Illuminate\Database\Seeder;

class BuilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Builder::create([
            'name'  => 'Constructora Bolivar S.A'
        ]);

        Builder::create([
            'name'  => 'Constructora El Castillo S.A.S'
        ]);

        Builder::create([
            'name'  => 'Constructora Meléndez'
        ]);
    }
}
