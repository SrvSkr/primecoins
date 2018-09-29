<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendPcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('send_pc', function($table)
		{
		    $table->increments('id');
		    $table->integer('sender_id')->default(0);
		    $table->integer('receiver_id')->default(0);
		    $table->decimal('amount')->default(0);
		    $table->string('description')->default('');
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
		Schema::dropIfExists('send_pc');
	}

}
