<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function($u) {
        	$u->questions() 
        		->saveMany(
        			factory(App\Question::class, rand(1, 5))->make() //make() saves in memory, while create stores in database
        		);
        });
        factory(App\Question::class, 10)->create();
    }
}
