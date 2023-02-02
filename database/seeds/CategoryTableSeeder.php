<?php

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'Cronaca',
            'Attualità e in risalto',
            'Scuola e istruzione',
            'Gossip',
            'Politica'
        ];

        foreach($categories as $category){
          Category::create([
            'slug'        => Category::getSlug($category),
            'name'        => $category,
            'description' => $faker->paragraphs(rand(1,5), true),
          ]);
        }
    }
}
