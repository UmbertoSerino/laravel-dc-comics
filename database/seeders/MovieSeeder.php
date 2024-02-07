<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Movie;
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $movies = config('movies');

        foreach ($movies as $movie) {
            $newMovie = new Movie();

            $newMovie->title = $movie['title'];
            $newMovie->img = $movie['img'];
            $newMovie->price = $movie['price'];
            $newMovie->year = $movie['year'];
            $newMovie->time = $movie['time'];
            $newMovie->description = $movie['description'];
            $newMovie->director = $movie['director'];
            $newMovie->save();
        }
    }
}
