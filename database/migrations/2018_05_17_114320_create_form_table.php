<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('wuye')->nullable();
            $table->longText('beizhu')->nullable();
            $table->integer('time')->nullable();
            $table->integer('category')->nullable();
            $table->integer('brand')->nullable();
            $table->integer('isreading')->default(0);
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
        Schema::dropIfExists('form');
    }
}
