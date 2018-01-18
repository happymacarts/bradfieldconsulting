<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* DB::table('users')->insert([
    			'name' => 'Joseph Bradfield',
    			'email' => 'me@josephbradfield.com',
    			'password' => bcrypt('secret'),
    	]);
    	
    	factory(App\User::class, 50)->create()->each(function ($u) {
    		$u->posts()->save(factory(App\Post::class)->make());
    	});
    	
    	DB::table('users')->insert([
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'password' => bcrypt('secret'),
    	]); */
    	
    	$faker = Faker::create();
    	DB::table('users')->insert([
    			'name' => 'Joseph Bradfield',
    			'email' => 'me@josephbradfield.com',
    			'password' => bcrypt('secret')
    	]);
    	
    	foreach (range(2,50) as $index) {
    		DB::table('users')->insert([
    				'name' => $faker->name,
    				'email' => $faker->email,
    				'password' => bcrypt('secret'),
    		]);
    		
    		
    		
    		
    		
    	}
    }
}
