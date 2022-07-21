<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 8; $i++){
            $tmpPost = new Post();
            $tmpPost->title = $faker->sentence();
            $tmpPost->content = $faker->text();
            $tmpPost->published = $faker->numberBetween(0,1);

            $tmpPost->save();
        }
    }
}
