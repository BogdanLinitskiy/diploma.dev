<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_IT', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
        Schema::create('sub_Marketing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
        Schema::create('sub_VideoNAnimation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
        Schema::create('sub_Design', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
        Schema::create('sub_FunNLifestyle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->timestamps();
        });
        Schema::create('sub_Business', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
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
        Schema::dropIfExists('sub_IT');
        Schema::dropIfExists('sub_Marketing');
        Schema::dropIfExists('sub_VideoNAnimation');
        Schema::dropIfExists('sub_Design');
        Schema::dropIfExists('sub_FunNLifestyle');
        Schema::dropIfExists('sub_Business');
    }
}
