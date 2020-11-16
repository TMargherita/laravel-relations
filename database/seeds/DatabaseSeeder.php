<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorsTableSeeder::class,
            AuthorsInfoTableSeeder::class,
            ComicsTableSeeder::class,  
            GenresTableSeeder::class        
        ]);
    }
}
