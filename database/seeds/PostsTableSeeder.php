<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Post');

        DB::table('posts')->insert([
        		'title' => $faker->sentence,
        		'body' => implode($faker->paragraphs(25)),
        		'category_id' => $faker->randomDigit,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        		'slug' => implode($faker->words),
        	]);
    }
}
    