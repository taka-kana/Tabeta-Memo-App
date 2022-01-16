<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('summary');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedBigInteger('revue_id');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade');

            $table->foreign('keyword_id')
            ->references('id')->on('keywords')
            ->onDelete('cascade');

            $table->foreign('revue_id')
            ->references('id')->on('revues')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
