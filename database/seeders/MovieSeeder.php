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

        $movies = [
            [
                'title' => 'The Dark Knight',
                'img' => 'https://m.media-amazon.com/images/S/pv-target-images/57618417a0ddf3b7aa29db658bef2fc3b9608bb11a021631d3b6408441c1e0f7.jpg',
                'description' => 'The plot follows the vigilante Batman, police lieutenant James Gordon, and district attorney Harvey Dent, who form an alliance to dismantle organized crime in Gotham City.',
                'director' => 'Christopher Nolan',
                'year' => '2008/07/23',
                'time' => '158 min',
                'price' => 10.99,
            ]
        ];

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
