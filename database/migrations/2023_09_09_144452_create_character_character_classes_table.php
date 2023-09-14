<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterCharacterClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_character_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_id');
            $table->foreign('character_id')->on('characters')->references('id')->cascadeOnDelete();
            $table->string('class_name');
            $table->foreign('class_name')->on('character_classes')->references('name')->cascadeOnDelete();
            $table->integer('level')->default(1);
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
        Schema::dropIfExists('character_character_classes');
    }
}
