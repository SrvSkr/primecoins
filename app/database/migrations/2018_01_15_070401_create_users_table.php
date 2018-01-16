<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('email')->default('');
		    $table->string('password')->default('');
		    $table->bigInteger('contact_no')->default(0);
		    $table->string('wallet_id')->default('');
		    $table->decimal('wallet_amount')->default(0);
		    $table->string('remember_token')->default('');
		    $table->boolean('confirmed')->default(0);
		    $table->string('confirmation_code')->nullable();
		    $table->date('created_at');
		    $table->date('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
