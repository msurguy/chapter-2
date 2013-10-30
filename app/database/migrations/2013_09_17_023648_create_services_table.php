<?php

use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

public function up()
{
	Schema::create('services', function($table)
	{
        $table->increments('id');
        $table->string('title');
        $table->text('description');
        $table->timestamps();
	});
}

public function down()
{
	Schema::drop('services');
}

}