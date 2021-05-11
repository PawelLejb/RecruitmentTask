<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsHasCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_has_categories',function (Blueprint  $table){
            $table->increments('id');
            $table->integer('posts_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('posts_has_categories',function (Blueprint  $table){
            $table->foreign('posts_id')
            ->references('id')
            ->on('posts');

        });
        Schema::table('posts_has_categories',function (Blueprint  $table){
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_has_categories');
    }
}
