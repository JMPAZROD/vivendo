<?php

namespace Database\Seeders;

use App\Models\ImageProject;
use Illuminate\Database\Seeder;

class ImageProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageProject::create([
            'project_id'    => 1,
            'file'          => 'https://definicion.de/wp-content/uploads/2011/01/casa-1.jpg'
        ]);

        ImageProject::create([
            'project_id'    => 2,
            'file'          => 'https://grupoabastel.com/wp-content/uploads/2020/05/casa-marmol1.jpg'
        ]);
    }
}
