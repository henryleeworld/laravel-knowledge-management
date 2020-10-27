<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $categories = Category::pluck('id');
        $tags = Tag::pluck('id');

        foreach(range(1,25) as $id)
        {
            $article = new Article;
            $article->title = $faker->sentence;
            $article->slug = SlugService::createSlug(Article::class, 'slug', $article->title);
            $article->short_text = $faker->paragraph;
            $article->full_text = $faker->paragraph(9);
            $article->views_count = rand(0, 1000);
            $article->category_id = $categories->random();
            $article->save();

            $article->tags()->sync($tags->random(rand(1, $tags->count())));
        }
    }
}
