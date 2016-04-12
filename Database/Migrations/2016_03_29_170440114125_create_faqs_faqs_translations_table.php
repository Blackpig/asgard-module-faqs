<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsFaqsTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqs__faqs_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question', 255);
            $table->text('answer');

            $table->integer('faqs_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['faqs_id', 'locale']);
            $table->foreign('faqs_id')->references('id')->on('faqs__faqs')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faqs__faqs_translations');
	}
}
