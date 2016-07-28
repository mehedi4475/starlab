<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\user;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

      $this->call('UserTableSeeder');
	}

}
