<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\NewsArticle;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
		$this->call(NewsArticleSeeder::class);

        Model::reguard();
    }
}
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
