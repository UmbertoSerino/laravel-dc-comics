<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $navBar = config('items-header.navbar');
        $dcComicsList = config('items-footer.dcComicsList');
        $shopList = config('shopList-footer.shopList');
        $dcList = config('dcList-footer.dcList');
        $sitesList = config('sitesList-footer.sitesList');
        $heroCards = config('herocards.heroCards');
        $comics = config('comics.comics');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->img = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}
