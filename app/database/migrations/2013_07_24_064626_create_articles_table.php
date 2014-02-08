<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table) {
            $table->increments('id');
            $table->integer('categoryId');
			$table->string('title');
			$table->string('alias');
			$table->text('content');
			$table->integer('authorId');
			$table->boolean('status');
			$table->boolean('comment');
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
		Schema::drop('articles');	
	}

}