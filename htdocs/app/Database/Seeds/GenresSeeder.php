<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Rap',
            ],
            [
                'name' => 'Indie',
            ],
            [
                'name' => 'Hyperpop',
            ],
            [
                'name' => 'Comedy',
            ],
            [
                'name' => 'Rock',
            ],
            [
                'name' => 'Metal',
            ],
            [
                'name' => 'Pop',
            ],
            [
                'name' => 'hardstyle',
            ],
        ];

        foreach($data as $item){
            $this->db->table('genres')->insert($item);
        }
    }
}
