<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	//factory('App\Category',5)->create();
    	//factory('App\Tag',15)->create();
    	//DB::table(['categories','tags'])->truncate();
    	$faker = Faker::create();
    	
    	$categories =['Accounting', 'Finance','Web Development','Design','Tutorials'];
    	$tags = ['taxes', 'banking','deductions','payroll','tutorials','design','Quickbooks'  ];
    	
    	foreach ($categories as $item) {
    		DB::table('categories')->insert([
    				'name' => $item
    				
    		]);
    	}
    	
    	foreach ($tags as $item) {
    		DB::table('tags')->insert([
    				'name' => $item
    				
    		]);
    	}
    }
}
