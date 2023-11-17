<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterSavingThrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_saving_throws', function (Blueprint $table) {
            $table->id();
            $table->integer('fortitude')->default(0);
            $table->integer('reflex')->default(0);
            $table->integer('will')->default(0);
            $table->foreignId('character_id');
            $table->foreign('character_id')->on('characters')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('character_saving_throws');
    }
}
