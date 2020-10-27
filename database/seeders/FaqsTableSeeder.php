<?php

namespace Database\Seeders;

use App\Models\FaqCategory;
use App\Models\FaqQuestion;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $categories = ['System usage', 'Integrations', 'Payments'];

        foreach($categories as $category)
        {
            $category = FaqCategory::create(['category' => $category]);
            foreach(range(1,5) as $id)
            {
                $question = new FaqQuestion;
                $question->question = $faker->sentence;
                $question->answer = $faker->paragraph;
                $category->faqQuestions()->save($question);
            }
        }
    }
}
