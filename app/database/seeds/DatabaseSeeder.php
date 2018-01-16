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

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'email' => 'admin@email.com',
        	'password' => Hash::make('12345'),
        	'contact_no' => 1234567890,
            'wallet_id' => '$2y$10$mhmUsrN8auTrijfX3D9lDuuZcAnVQLiWM4WLX5zZxkUWbytadMstO',
            'wallet_amount' => 100.00,
        	'created_at' => Carbon\Carbon::now()
        	));
         User::create(array(
        	'email' => 'user@email.com',
        	'password' => Hash::make('12345'),
        	'contact_no' => 1234567890,
            'wallet_id' => '$2y$10$mhmUsrN8auTrijfX3D9lDuuZcAnVQLiWM4WLX5zZxkUWbytadMstO12',
            'wallet_amount' => 100.00,
        	'created_at' => Carbon\Carbon::now()
        	));
    }

}
