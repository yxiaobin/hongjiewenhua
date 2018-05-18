<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('href')->nullable();
            $table->integer('num')->nullable();
            $table->integer('show')->default(0);
            $table->string('category')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('menue');
    }
}
