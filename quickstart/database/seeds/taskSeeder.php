<?php

use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(tasksSeeder::class);
    }
}

/**
 * 
 */
class tasksSeeder extends Seeder
{
	
	public function run()
	{
		# code...
		DB::table('tasks')->insert([
			['name'=>str_random(3).'Loc'],
			['name'=>str_random(3).'Loc'],
			['name'=>str_random(3).'Loc'],
			['name'=>str_random(3).'Loc'],
			['name'=>str_random(3).'Loc']
		]);
	}
}
