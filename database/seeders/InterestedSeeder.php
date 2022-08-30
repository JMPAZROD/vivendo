<?php

namespace Database\Seeders;

use App\Models\Interested;
use Illuminate\Database\Seeder;

class InterestedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interested::create([
            'name'       => 'Juan Paz',
            'email'      => 'jpaz@gmail.com',
            'phone'      => '12345',
            'city'       => 'jamundí',
            'country'    => 'Colombia',
            'project_id' => 1
        ]);

        Interested::create([
            'name'       => 'Manuel Rodriguez',
            'email'      => 'mrod@gmail.com',
            'phone'      => '54321',
            'city'       => 'cali',
            'country'    => 'Colombia',
            'project_id' => 2
        ]);
    }
}
