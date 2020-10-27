<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Faker\Factory;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach(range(1, 30) as $id)
        {
            $word = $faker->word;
            Tag::create(['name' => $word, 'slug' => SlugService::createSlug(Tag::class, 'slug', $word)]);
        }
    }
}
