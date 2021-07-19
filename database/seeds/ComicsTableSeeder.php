<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics=config('comics');

        foreach ($arrayComics as $comic) {

            //1. Creo un nuovo oggetto, istanza Comic
            $newComic = new Comic();

            //2.Valorizzo le proprieta' dell'oggetto
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $slug = $comic['title'];
            $newComic->slug = Str::slug($slug, '-');

            //3.Salvo oggetto
            $newComic->save();


        }
    }
}
