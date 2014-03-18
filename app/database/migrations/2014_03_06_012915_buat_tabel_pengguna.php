<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPengguna extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengguna', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_tampilan', 50);
			$table->string('username', 50);
			$table->string('password', 50);
			$table->string('email', 50);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengguna');
	}

}