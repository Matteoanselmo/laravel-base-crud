<?php

use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newComic = new Comic();
            $newComic->title = $faker->word(2, true);
            $newComic->description = $faker->sentence(6);
            $newComic->thumb = $faker->imageUrl(360, 360, 'comics', true, 'comics');
            $newComic->price = $faker->randomFloat(2, 0, 99);
            $newComic->series = $faker->word(2, true);
            $newComic->sale_date = $faker->date();
            $newComic->type = $faker->word(2, true);
            $newComic->save();
        }
    }
}
