<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenresSongsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'genre_id' => 1,
                'song_id' => 1,
            ],
            [
                'genre_id' => 2,
                'song_id' => 2,
            ],
            [
                'genre_id' => 1,
                'song_id' => 3,
            ],
            [
                'genre_id' => 2,
                'song_id' => 4,
            ],
            [
                'genre_id' => 3,
                'song_id' => 5,
            ],
            [
                'genre_id' => 1,
                'song_id' => 6,
            ],
            [
                'genre_id' => 1,
                'song_id' => 7,
            ],
            [
                'genre_id' => 2,
                'song_id' => 8,
            ],
            [
                'genre_id' => 1,
                'song_id' => 9,
            ],
            [
                'genre_id' => 1,
                'song_id' => 10,
            ],
            [
                'genre_id' => 4,
                'song_id' => 11,
            ],
            [
                'genre_id' => 2,
                'song_id' => 12,
            ],
            [
                'genre_id' => 5,
                'song_id' => 13,
            ],
            [
                'genre_id' => 5,
                'song_id' => 14,
            ],
            [
                'genre_id' => 5,
                'song_id' => 15,
            ],
            [
                'genre_id' => 4,
                'song_id' => 16,
            ],
            [
                'genre_id' => 5,
                'song_id' => 17,
            ],
            [
                'genre_id' => 6,
                'song_id' => 18,
            ],
            [
                'genre_id' => 5,
                'song_id' => 19,
            ],
            [
                'genre_id' => 5,
                'song_id' => 20,
            ],
            [
                'genre_id' => 6,
                'song_id' => 21,
            ],
            [
                'genre_id' => 1,
                'song_id' => 22,
            ],
            [
                'genre_id' => 5,
                'song_id' => 23,
            ],
            [
                'genre_id' => 5,
                'song_id' => 24,
            ],
            [
                'genre_id' => 6,
                'song_id' => 25,
            ],
            [
                'genre_id' => 5,
                'song_id' => 26,
            ],
            [
                'genre_id' => 6,
                'song_id' => 27,
            ],
            [
                'genre_id' => 1,
                'song_id' => 28,
            ],
            [
                'genre_id' => 1,
                'song_id' => 29,
            ],
            [
                'genre_id' => 1,
                'song_id' => 30,
            ],
            [
                'genre_id' => 2,
                'song_id' => 31,
            ],
            [
                'genre_id' => 5,
                'song_id' => 32,
            ],
            [
                'genre_id' => 1,
                'song_id' => 33,
            ],
            [
                'genre_id' => 1,
                'song_id' => 34,
            ],
            [
                'genre_id' => 1,
                'song_id' => 35,
            ],
            [
                'genre_id' => 5,
                'song_id' => 36,
            ],
            [
                'genre_id' => 6,
                'song_id' => 37,
            ],
            [
                'genre_id' => 2,
                'song_id' => 38,
            ],
            [
                'genre_id' => 6,
                'song_id' => 39,
            ],
            [
                'genre_id' => 2,
                'song_id' => 40,
            ],
            [
                'genre_id' => 2,
                'song_id' => 41,
            ],
            [
                'genre_id' => 2,
                'song_id' => 42,
            ],
            [
                'genre_id' => 2,
                'song_id' => 43,
            ],
            [
                'genre_id' => 6,
                'song_id' => 44,
            ],
            [
                'genre_id' => 7,
                'song_id' => 45,
            ],
            [
                'genre_id' => 7,
                'song_id' => 46,
            ],
            [
                'genre_id' => 1,
                'song_id' => 47,
            ],
            [
                'genre_id' => 1,
                'song_id' => 48,
            ],
            [
                'genre_id' => 2,
                'song_id' => 49,
            ],
            [
                'genre_id' => 7,
                'song_id' => 50,
            ],
            [
                'genre_id' => 8,
                'song_id' => 51,
            ],
            [
                'genre_id' => 5,
                'song_id' => 52,
            ],
            [
                'genre_id' => 5,
                'song_id' => 53,
            ],
            [
                'genre_id' => 5,
                'song_id' => 54,
            ],
            [
                'genre_id' => 7,
                'song_id' => 55,
            ],
            [
                'genre_id' => 4,
                'song_id' => 56,
            ],
            [
                'genre_id' => 4,
                'song_id' => 57,
            ],
            [
                'genre_id' => 7,
                'song_id' => 58,
            ],
            [
                'genre_id' => 8,
                'song_id' => 59,
            ],
            [
                'genre_id' => 2,
                'song_id' => 60,
            ],
        ];

        foreach($data as $item){
            $this->db->table('genres_songs')->insert($item);
        }
    }
}
