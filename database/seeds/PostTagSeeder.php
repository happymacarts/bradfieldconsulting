<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('post_tag')->truncate();
    	$faker = Faker::create();
    	
    	foreach (range(1,50) as $index) {
    		DB::table('post_tag')->insert([
    				'post_id' => $faker->numberBetween ( 1, 50 ),
    				'tag_id' => $faker->numberBetween ( 1, 15 )
    				//'created_at'=> $faker->unixTime($max = 'now')  ,
    		]);
    	}
    }
}
