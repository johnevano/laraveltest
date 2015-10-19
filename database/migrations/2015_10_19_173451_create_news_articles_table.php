<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_articles', function (Blueprint $table) {
            $table->increments('id');
			  $table->integer('user_id');
			  $table->boolean('is_approved')->default(false);
			   $table->string('title');
			   $table->string('title_slug');
			    $table->string('photo_url');
				$table->mediumText('excerpt');
				$table->text('body');
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
        Schema::drop('news_articles');
    }
}
