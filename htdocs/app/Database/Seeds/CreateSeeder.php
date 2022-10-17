<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateSeeder extends Seeder
{
    public function run()
    {
        $seeders = [
            "Genres",
            "Songs",
            "GenresSongs",
        ];

        foreach($seeders as $seeder){
            $this->call($seeder. "Seeder");
        }
    }
}
