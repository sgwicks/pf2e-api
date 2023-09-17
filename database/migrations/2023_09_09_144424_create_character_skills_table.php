<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('proficiency');
            $table->integer('item');
            $table->foreignId('character_id');
            $table->foreign('character_id')->on('characters')->references('id')->cascadeOnDelete();
            $table->foreignId('skill_id');
            $table->foreign('skill_id')->on('skills')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('character_skills');
    }
}
