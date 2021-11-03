<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParallaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parallaxes', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('title_size');
            $table->string('title_color');
            $table->string('body',500);
            $table->string('body_size');
            $table->string('body_color');
            $table->string('image',150);
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
        Schema::dropIfExists('parallaxes');
    }
}
