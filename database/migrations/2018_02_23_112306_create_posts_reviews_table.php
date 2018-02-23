<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('about');
            $table->integer('price');
            $table->string('order_details');
            $table->integer('sub_category_id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('reviews',function (Blueprint $table){
            $table->increments('id');
            $table->string('content');
            $table->decimal('rating');
            $table->date('date');
            $table->integer('post_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('reviews');
    }
}
