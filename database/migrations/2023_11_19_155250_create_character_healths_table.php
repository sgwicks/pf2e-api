<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_healths', function (Blueprint $table) {
            $table->id();

            $table->integer('max')->default(0);
            $table->integer('current')->default(0);
            $table->integer('temporary')->default(0);
            $table->integer('dying')->default(0);
            $table->integer('wounded')->default(0);
            $table->string('resistances')->nullable();
            $table->string('weaknesses')->nullable();
            $table->string('immunities')->nullable();
            $table->string('conditions')->nullable();

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
        Schema::dropIfExists('character_healths');
    }
}
