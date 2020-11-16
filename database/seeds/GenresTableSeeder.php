<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreArray = [
            'fantasy',
            'horror',
            'drama',
            'comedy',
            'action',
            'sci-fi'
        ];
        
        foreach ($genreArray as $genre) {
            $newGenre = new Genre;
            $newGenre->name = $genre;
            $newGenre->save();
        }
    }
}