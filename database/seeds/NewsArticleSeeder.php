<?php

use Illuminate\Database\Seeder;
use App\NewsArticle;
class NewsArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();

for ($i = 0; $i < 100; $i++)
{
  $news_article = NewsArticle::create([
    'title' => $faker->sentence,
	'user_id' => $faker->randomNumber,
	'title_slug' => $faker->slug,
    'body' => $faker->paragraph,
	 'photo_url' => $faker->imageUrl,
	 'excerpt' => $faker->paragraph

  ]);
}
    }
}
