<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCharacterProficienciesTableForDc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_proficiencies', function (Blueprint $table) {
            $table->integer('class_dc')->default(0);
            $table->integer('spell_dc')->default(0);
            $table->integer('spell_attack')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_proficiencies', function (Blueprint $table) {
            $table->dropColumn(['class_dc', 'spell_dc', 'spell_attack']);
        });
    }
}
