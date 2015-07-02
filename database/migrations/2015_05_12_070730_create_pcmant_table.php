<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcmantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pc_mants', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->increments('id');
			$table->integer('pcid')->unsigned();
			$table->string('slug')->default('');
			$table->date('date_mant');
			$table->string('text_mant',500);

		});
		
		Schema::table('pc_mants', function($table)
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
		Schema::drop('pc_mants');
	}

}
