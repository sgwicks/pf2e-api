<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_movements', function (Blueprint $table) {
            $table->id();
            $table->integer('base')->default(30);
            $table->integer('burrow')->default(0);
            $table->integer('climb')->default(0);
            $table->integer('fly')->default(0);
            $table->integer('swim')->default(0);
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
        Schema::dropIfExists('character_movements');
    }
}
