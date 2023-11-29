<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_proficiencies', function (Blueprint $table) {
            $table->id();

            // Armour proficiencies
            $table->integer('unarmoured')->default(0);
            $table->integer('light')->default(0);
            $table->integer('medium')->default(0);
            $table->integer('heavy')->default(0);

            // Weapon proficiencies
            $table->integer('unarmed')->default(0);
            $table->integer('simple')->default(0);
            $table->integer('martial')->default(0);

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
        Schema::dropIfExists('character_proficiencies');
    }
}
