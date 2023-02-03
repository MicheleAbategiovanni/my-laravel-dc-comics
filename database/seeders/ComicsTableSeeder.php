<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listComics = config('comics');

        foreach ($listComics as $comic) {

            $fumetto = new Comic();
            $fumetto->title = $comic['title'];
            $fumetto->description = $comic['description'];
            $fumetto->thumb = $comic['thumb'];
            $fumetto->price = $comic['price'];
            $fumetto->series = $comic['series'];
            $fumetto->sale_date = $comic['sale_date'];
            $fumetto->type = $comic['type'];
            $fumetto->save();
        }
    }
}
