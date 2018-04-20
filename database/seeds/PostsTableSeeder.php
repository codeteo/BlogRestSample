<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Post::truncate();

		$faker = \Faker\Factory::create();

		// Let's create a few dummy data in our database:
		for($i = 0; $i < 50; $i++) {
			App\Post::create([
				'title' => $faker->sentence,
				'body' => $faker->paragraph,
			]);
		}
    }
}
