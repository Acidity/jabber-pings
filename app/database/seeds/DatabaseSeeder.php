<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');
		//$this->command->info('User table seeded!');

		//$this->call('TimersTableSeeder');
		//$this->command->info('Timers table seeded!');

		$this->call('PingTableSeeder');
		$this->command->info('Pings table seeded!');
	}

}