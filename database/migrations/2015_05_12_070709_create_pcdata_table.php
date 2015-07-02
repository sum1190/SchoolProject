<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pc_datas', function(Blueprint $table)
		{
			$table->engine='InnoDB';
			$table->increments('id');
			$table->string('pc_name',50);
			$table->string('slug')->default('');
			$table->string('workgroup',50);
			$table->string('admin_pass',30);
			$table->string('bios_pass',30);
			$table->string('pc_inventory',10);
			$table->string('screen_inventory',10);
			$table->string('drop_motivation',160);
			$table->string('so',30);
			$table->string('pk_win',25);
			$table->string('pk_office',25);
			$table->string('installed_software',500);
			$table->string('antivirus',25);
			$table->string('browser',25);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pc_datas');
	}

}
