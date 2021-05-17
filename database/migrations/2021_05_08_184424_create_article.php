<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('short_description');
            $table->longText('content');
            $table->dateTime('created_at');
            $table->dateTime('modified_at');
            $table->dateTime('published_at');
            $table->string('SEO_title', 60);
            $table->string('SEO_description', 150);
            $table->string('slug')->unique();
            $table->BigInteger('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users');
            $table->BigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('specifications');
            $table->BigInteger('specification_id')->unsigned();
            $table->foreign('specification_id')->references('id')->on('specifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
