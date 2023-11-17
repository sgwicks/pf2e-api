<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ancestry')->nullable();
            $table->string('heritage')->nullable();
            $table->string('background')->nullable();
            $table->string('size')->nullable();
            $table->string('alignment')->nullable();
            $table->string('traits')->nullable();
            $table->string('deity')->nullable();
            $table->integer('strength')->default(0);
            $table->integer('dexterity')->default(0);
            $table->integer('constitution')->default(0);
            $table->integer('intelligence')->default(0);
            $table->integer('wisdom')->default(0);
            $table->integer('charisma')->default(0);
            $table->integer('level')->default(1);
            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('characters');
    }
}
