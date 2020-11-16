<?php

use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            
            $newAuthor = new Author();
            $newAuthor->name = $faker->firstName();
            $newAuthor->lastname = $faker->lastname(); 
            $newAuthor->date_of_birth = $faker->dateTimeBetween('-30 years', 'now'); 
            $newAuthor->save();
        }
    }
}