<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcspecsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pc_specs', function(Blueprint $table)
		{
			$table->engine='InnoDB';

			$table->increments('id');
			$table->string('slug');
			$table->integer('pcid')->unsigned();
			$table->string('processor',50);
			$table->string('motherboard',50);
			$table->string('ram',50);
			$table->string('videocard',50);
			$table->string('harddisk',50);
			$table->integer('size_c');
			$table->integer('size_d');
		});

		Schema::table('pc_specs', function($table)
		{
		    $table->foreign('pcid')
		        ->references('id')->on('pc_datas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pcspecs');
	}

}
