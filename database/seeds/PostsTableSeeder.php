<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* $Model::unguard();
    	
    	DB::table('posts')->truncate();
    	$faker = Faker::create();
    	    	
    	foreach (range(1,50) as $index) {
    		DB::table('posts')->insert([
    				'title' => $faker->sentence(3),
    				'body' => $faker->paragraph(4)
    				//'created_at'=> $faker->unixTime($max = 'now')  ,
    		]);
    	} */
    	
    	factory('App\Post',50)->create();
    }
}
